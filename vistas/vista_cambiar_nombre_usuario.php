<?php
    require_once "config/conectar.php";
    echo "<form class='form' action='controlador/cambiar_nombre_usuario.php' method='post'><label for='nuevo_usuario'>Nuevo nombre de usuario</label>&nbsp<input type='text' name='nuevo_usuario' required><input type='submit' value='Cambiar nombre'>";
