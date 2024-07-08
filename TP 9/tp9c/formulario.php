<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Deportes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="tarjeta">
  <h1>Formulario de Deportes</h1>
  <form action="procesar.php" method="post">
  <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="deportes">Deportes:</label><br>
        <input type="checkbox" id="futbol" name="deportes[]" value="futbol"> Fútbol<br>
        <input type="checkbox" id="basket" name="deportes[]" value="basket"> Baloncesto<br>
        <input type="checkbox" id="tennis" name="deportes[]" value="tennis"> Tenis<br>
        <input type="checkbox" id="voley" name="deportes[]" value="voley"> Voleibol<br><br>
        <input type="submit" value="Enviar">
  </form>
</div>
</body>
</html>