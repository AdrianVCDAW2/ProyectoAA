<?php
echo "<h1>Gestión de cuenta</h1>";
echo "<h2>Nombre de usuario</h2>";
echo "<p>".$_SESSION['usuario']."</p>";
echo "<form action='?opcion=cambiar_nombre_usuario' method='post'>";