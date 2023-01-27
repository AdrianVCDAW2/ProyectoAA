<?php
$usuario_eliminar = $_POST["eliminar"];
require_once "../config/conectar.php";
$sql = "DELETE FROM usuarios WHERE id_usuario = ".$usuario_eliminar;
mysqli_query($conexion,$sql);
header("location: http://localhost/ProyectoAA?opcion=gestionar_usuarios");