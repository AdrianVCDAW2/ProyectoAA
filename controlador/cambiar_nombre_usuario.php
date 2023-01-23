<?php
require_once "../config/conectar.php";
session_start();
$nuevoNombre = $_POST["nuevo_usuario"];
$sql = "UPDATE usuarios SET usuario = '".$nuevoNombre."' where id_usuario = ".$_SESSION['id'][0];
mysqli_query($conexion,$sql);
$_SESSION['usuario'] = $nuevoNombre;
header("location:http://localhost/ProyectoAA");