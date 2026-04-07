<?php
$host = "localhost";
$user = "root";      
$pass = "Pinktulip11$";          
$db   = "pasteleria_control";

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}