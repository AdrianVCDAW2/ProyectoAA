<?php
require_once("../config/conectar.php");
$habitacion = $_GET["habitacion"];
$cliente = $_GET["cliente"];
$fecha_reserva = $_GET["usuario"];
$fecha_entrada = $_GET["fecha_entrada"];
$noches = $_GET["noches"];
$sql = "INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo_usuario`, `passwd_usuario`, `tipo_usuario`, `perfil_usuario`) VALUES (NULL,'" . $usuario . "','" . $correo . "','" . $passwd . "','" . $tipo . "', 'avatar.jpg');";
mysqli_query($conexion, $sql);
header("location:../index.php")
?>