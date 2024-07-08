<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
<?php
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
sort($meses);
echo "<h3>Meses del año ordenados alfabéticamente:</h3>";
echo "<ul>";
foreach ($meses as $mes) {
    echo "<li>$mes</li>";
}
?>
</body>
</html>