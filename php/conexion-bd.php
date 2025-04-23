<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}