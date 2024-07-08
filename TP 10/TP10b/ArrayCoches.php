<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de Coches</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Array de Coches</h1>

    <?php
    $coches = [1, 2, 3, 4, 5, 6, 7, 8];
    echo "<div class='result'>Elemento con índice 5 del array de coches: " . $coches[5] . "</div>";
    ?>

</body>
</html>
