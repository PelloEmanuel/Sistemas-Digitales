<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Suscripción</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="tarjeta">
        <h1>Formulario de Suscripción</h1>
        <form action="procesar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido"><br><br>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad"><br><br>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni"><br><br>
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br><br>
            <label for="genero">Género:</label>
            <select id="genero" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select><br><br>
            <label for="lugar_nacimiento">Lugar de nacimiento:</label>
            <input type="text" id="lugar_nacimiento" name="lugar_nacimiento"><br><br>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion"><br><br>
            <label for="intereses">Intereses/Hobbies:</label>
            <textarea id="intereses" name="intereses"></textarea><br><br>
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios"></textarea><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>