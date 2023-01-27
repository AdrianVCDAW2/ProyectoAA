<?php
echo "<table><tr><th>ID USUARIO</th><th>NOMBRE USUARIO</th><th>CORREO USUARIO</th><th>ROL</th><th>PERFIL</th><th>ELIMINAR</th></tr>";
foreach ($usuarios as $usuario) {
    echo "<tr><td>".$usuario['id_usuario']."</td><td>".$usuario['usuario']."</td><td>".$usuario['correo_usuario']."</td><td>".$usuario['tipo_usuario']."</td><td><img src='http://localhost/ProyectoAA/uploads/profilepics/".$usuario['perfil_usuario']."' alt='perfil' height='30' width='30'></td><td><form action='controlador/eliminar_usuario.php' method='post'><input type='hidden' name='eliminar' value='".$usuario['id_usuario']."'><input type='submit' value='Eliminar'";
    if ($_SESSION["id"][0] == $usuario["id_usuario"]){
        echo " disabled";
    }
    echo "></form></td></tr>";
}
echo "</table>";
