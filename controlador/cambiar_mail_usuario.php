<?php
require_once "../config/conectar.php";
session_start();
$nuevoMail = $_POST["nuevo_mail"];
$sql = "UPDATE usuarios SET correo_usuario   = '".$nuevoMail."' where id_usuario = ".$_SESSION['id'][0];
mysqli_query($conexion,$sql);
header("location:http://localhost/ProyectoAA");