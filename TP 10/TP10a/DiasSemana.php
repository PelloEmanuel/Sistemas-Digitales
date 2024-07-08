<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de la semana</title>
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
    <h1>Días de la semana</h1>

    <?php
    $dias_semana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    
    echo "<div class='result'>Primer día de la semana: " . $dias_semana[0] . "</div>";
    echo "<div class='result'>Último día de la semana: " . $dias_semana[count($dias_semana) - 1] . "</div>";
    ?>
    
</body>
</html>
