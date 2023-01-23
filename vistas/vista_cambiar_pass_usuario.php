<?php
require_once "config/conectar.php";
echo "<form class='form' action='controlador/cambiar_pass_usuario.php' method='post'><label for='nueva_pass'>Nueva contraseña</label>&nbsp<input type='text' name='nueva_pass' required><input type='submit' value='Cambiar contraseña'>";
?>