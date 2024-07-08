
<!DOCTYPE html>
<html>
<head>
    <title>Alineación del Equipo</title>
</head>
<body>
<?php
$jugador = array("García", "López", "Martínez", "Rodríguez", "Fernández");
$frase = "La alineación del equipo está compuesta por " . implode(", ", $jugador) . "."; 
?>

    <p><?php echo $frase; ?></p>
</body>
</html>