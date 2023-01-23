<?php
echo "<h1>Gestión de cuenta</h1>";
echo "<h2>Nombre de usuario</h2>";
echo "<p>".$_SESSION['usuario']."&nbsp<a href='?opcion=cambiar_nombre_usuario'><i class='fas fa-edit'></i></a></p>";
echo "<h2>Contraseña</h2><p>Cambiar contraseña<a href='?opcion=cambiar_pass_usuario'><i class='fas fa-edit'></i></a></p>";
echo "<h2>Correo electrónico</h2><p>Cambiar correo<a href='?opcion=cambiar_mail_usuario'><i class='fas fa-edit'></i></a></p>";