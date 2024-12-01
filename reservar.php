<?php
$restaurante = $_GET['restaurante'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 - UF4 - AE8</title>
    <link rel="stylesheet" href="reservar.css">
</head>
<body>
    <h1>Formulario de reserva</h1>
    <form action="resultado.php" method="POST">
        <label for="restaurante">Restaurante:</label>
        <input type="text" id="restaurante" name="restaurante" value="<?= $restaurante ?>" readonly required>
        <br><br>
        <label for="fecha">Fecha de la reserva:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
        <label for="personas">Número de personas:</label>
        <input type="number" id="personas" name="personas" min="1" required>
        <br><br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <br><br>
        <label for="nombre">Nombre y apellidos:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <button type="submit">Reservar</button>
    </form>
</body>
</html>