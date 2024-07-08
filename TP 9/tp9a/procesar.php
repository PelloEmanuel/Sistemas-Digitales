<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        $mensaje = "¡$nombre es mayor de edad!";
    } else {
        $mensaje = "¡$nombre es menor de edad!";
    }

}
?>
    <?php
    echo "<h2>$mensaje</h2>";
    ?>
