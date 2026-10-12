<?php
$host = getenv('sakura.proxy.rlwy.net ');
$port = (int) getenv('12790');
$user = getenv('root');
$pass = getenv('sAwfZqqzLnHOxiVrTtfbAbKyHpImHglz ');
$name = getenv('Sistema');

$conexion = new mysqli($host, $user, $pass, $name, $port);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$conexion->set_charset("utf8mb4");