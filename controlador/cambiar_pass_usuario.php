<?php
require_once "../config/conectar.php";
session_start();
$nuevaPass = $_POST["nueva_pass"];
$sql = "UPDATE usuarios SET passwd_usuario = '".$nuevaPass."' where id_usuario = ".$_SESSION['id'][0];
mysqli_query($conexion,$sql);
header("location:http://localhost/ProyectoAA");