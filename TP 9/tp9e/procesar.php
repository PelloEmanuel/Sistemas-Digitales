<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $dni = $_POST['dni'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $lugar_nacimiento = $_POST['lugar_nacimiento'];
    $direccion = $_POST['direccion'];
    $intereses = $_POST['intereses'];
    $comentarios = $_POST['comentarios'];

    $mensaje = "Suscripción realizada con éxito!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="tarjeta">
        <h1>Resultado</h1>
        <p>Nombre: <?php echo $nombre;?></p>
        <p>Apellido: <?php echo $apellido;?></p>
        <p>Edad: <?php echo $edad;?></p>
        <p>DNI: <?php echo $dni;?></p>
        <p>Fecha de nacimiento: <?php echo $fecha_nacimiento;?></p>
        <p>Género: <?php echo $genero;?></p>
        <p>Lugar de nacimiento: <?php echo $lugar_nacimiento;?></p>
        <p>Dirección: <?php echo $direccion;?></p>
        <p>Intereses/Hobbies: <?php echo $intereses;?></p>
        <p>Comentarios: <?php echo $comentarios;?></p>
        <p><?php echo $mensaje;?></p>
    </div>

</body>
</html>