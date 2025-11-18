<?php
$conexion = mysqli_connect("localhost", "root", "", "lujos_jd");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
