<?php
echo "<h1>Gestión de cuenta</h1>";
echo "<h2>Nombre de usuario</h2>";
echo "<p>".$_SESSION['usuario']."&nbsp<a href='?opcion=cambiar_nombre_usuario'><i class='fas fa-edit'></i></p>";
echo "<form action='?opcion=cambiar_nombre_usuario' method='post'>";