<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=? AND clave=SHA2(?,256)");
    $stmt->bind_param("ss", $usuario, $clave);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $_SESSION["usuario"] = $usuario;
        header("Location: home.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<link rel="stylesheet" href="estilos.css">

<h1>Login</h1>
<h2>Registro de Usuarios - Pastelería Baires</h2>
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    Usuario: <input type="text" name="usuario" required><br>
    Contraseña: <input type="password" name="clave" required><br>
    <button type="submit">Ingresar</button>
</form>