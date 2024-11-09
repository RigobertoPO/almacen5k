<?php require_once('layout/header.php');?>
<h1>Crear cuenta</h1>
<form action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo"><br><br>
    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña"><br><br>
    <label for="confirmar_contraseña">Confirmar contraseña:</label>
    <input type="password" id="confirmar_contraseña" name="confirmar_contraseña"><br><br>
    <input type="submit" value="Crear cuenta">
    <input type="hidden" name="i" value="crearcuenta">

</form>
<?php require_once('layout/footer.php');?>