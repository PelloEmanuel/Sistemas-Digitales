<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Deuda</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="tarjeta">
        <h1>Formulario de Deuda</h1>
        <form action="procesar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"><br><br>
            <label for="monto">Monto adeudado:</label>
            <select id="monto" name="monto">
                <option value="1-1000">1-1000</option>
                <option value="1001-10000">1001-10000</option>
                <option value=">10000">>10000</option>
            </select><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>