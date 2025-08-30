<?php
$host = "fdb1034.awardspace.net"; // AwardSpace suele usar localhost
$usuario = "4667269_votos"; // el usuario que creaste
$password = "sS1/**/1Ss"; // la contraseña que pusiste
$base_datos = "4667269_votos"; // el nombre de la base de datos

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
