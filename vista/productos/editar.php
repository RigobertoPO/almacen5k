<?php
    foreach ($datos as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['Id'];
            $nombre=$valor['Nombre'];
            $precio=$valor['Precio'];
            $existencia=$valor['Existencia'];
        }
    }
?>
<?php require_once('vista/layout/header.php');?>
<h1>editar producto</h1>
<form action="">
<label for="id">Id:</label>
<input type="text" readonly id="id" name="id" value="<?= $id ?>"><br><br>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?= $nombre ?>"><br><br>
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" value="<?= $precio ?>"><br><br>
    <label for="descripcion">Existencia:</label>
    <input type="number" id="existencia" name="existencia" value="<?= $existencia ?>"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="p" value="actualizar">

</form>
<?php require_once('vista/layout/footer.php');?>