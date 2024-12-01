<?php
$restaurante = $_POST['restaurante'];
$fecha = $_POST['fecha'];
$personas = $_POST['personas'];
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 - UF2 - AE4</title>
    <link rel="stylesheet" href="resultado.css">
</head>
<body>
<div class="confirmation-container">
        <h1>¡Reserva confirmada!</h1>
        <p>Restaurante: <?= $restaurante ?></p>
        <p>Fecha de la reserva: <?= $fecha ?></p>
        <p>Número de personas: <?= $personas ?></p>
        <p>Correo electrónico: <?= $correo ?></p>
        <p>Nombre y apellidos: <?= $nombre ?></p>
        <button><a href="index.php">Cerrar</a></button>
    </div>
</body>
</html>