<?php
session_start();
if (!isset($_SESSION["usuario"])) header("Location: index.php");
include("conexion.php");
?>

<link rel="stylesheet" href="estilos.css">

<h1>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h1>
<a href="logout.php">Cerrar sesión</a>

<h2>Ingresar datos</h2>
<form action="guardar.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Edad: <input type="number" name="edad" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit">Guardar</button>
</form>

<h2>Datos ingresados</h2>
<table>
    <tr><th>Nombre</th><th>Edad</th><th>Email</th></tr>
    <?php
    $sql = "SELECT * FROM datos ORDER BY id DESC";
    $res = $conexion->query($sql);
    while ($fila = $res->fetch_assoc()) {
        echo "<tr><td>".$fila["nombre"]."</td><td>".$fila["edad"]."</td><td>".$fila["email"]."</td></tr>";
    }
    ?>
</table>