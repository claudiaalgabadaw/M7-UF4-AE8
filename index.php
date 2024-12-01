<?php
$restaurantes = ["McDonalds", "Burger King", "KFC"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 - UF4 - AE8</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Escoge un restaurante</h1>
    <table>
        <tr>
            <th>Nombre del restaurante</th>
            <th>Reservar</th>
        </tr>
        <?php foreach ($restaurantes as $restaurante): ?>
            <tr>
                <td><?= $restaurante ?></td>
                <td>
                    <a href="reservar.php?restaurante=<?= $restaurante ?>"><img src="calendario.png"></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </ul>
    </table>
</body>
</html>