<?php require_once('vista/layout/header.php');?>
<h1>Registrar nuevo producto</h1>
<form action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio"><br><br>
    <label for="descripcion">Existencia:</label>
    <input type="number" id="existencia" name="existencia"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="p" value="guardar">

</form>
<?php require_once('vista/layout/footer.php');?>