<!DOCTYPE html>
<html>
<head>
    <title>Claves de Acceso de Usuarios</title>
</head>
<body>
    <?php
    $usuarios = array(
        "usuario1" => "clave123",
        "usuario2" => "contraseña456",
        "usuario3" => "secreto789",
        "usuario4" => "acceso987",
        "usuario5" => "seguridad1234"
    );
    ?>

    <h3>Claves de acceso de los usuarios:</h3>
    <ul>
        <?php foreach ($usuarios as $usuario => $clave): ?>
            <li>Usuario: <?php echo $usuario; ?> - Clave: <?php echo $clave; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>