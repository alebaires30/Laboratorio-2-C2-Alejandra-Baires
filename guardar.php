<?php
session_start();
if (!isset($_SESSION["usuario"])) header("Location: index.php");
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $edad = $_POST["edad"];
    $email = trim($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Email inválido");
    if (!is_numeric($edad) || $edad <= 0) die("Edad inválida");

    $stmt = $conexion->prepare("INSERT INTO datos (nombre, edad, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $nombre, $edad, $email);
    $stmt->execute();

    header("Location: home.php");
    exit;
}