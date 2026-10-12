<?php
require "conexion.php";
if ($_SERVER["REQUEST_METHOD"] !== "POST") { header("Location: encuesta.html"); exit; }

$campos = ["profesores","instalacion","wifi","biblioteca","sugerencia"];
$d = [];
foreach ($campos as $c) {
  $d[$c] = trim($_POST[$c] ?? "");
  if ($d[$c] === "") { die("Faltan respuestas. <a href='encuesta.html'>Volver</a>"); }
}
$d["sugerencia"] = mb_substr($d["sugerencia"], 0, 300);

// Consulta preparada: evita inyección SQL
$sql = "INSERT INTO respuestas (profesores, instalacion, wifi, biblioteca, sugerencia)
        VALUES (:profesores, :instalacion, :wifi, :biblioteca, :sugerencia)";
$pdo->prepare($sql)->execute($d);

header("Location: regalo.html");
exit;
