<?php
require_once("../config/conectar.php");
session_start();
$habitacion = $_GET["habitacion"] . "_01";
$cliente = $_SESSION["id"];
$fecha_reserva = date('y-m-d');
$fecha_entrada = $_GET["fecha_entrada"];
$noches = $_GET["noches"];
// obtener precio por noche y dar precio total
$sql = "INSERT INTO `reservas` (`id_habitacion`, `id_cliente`, `fecha_reserva`, `fecha_entrada`, `n_noches`) VALUES ('$habitacion',$cliente[0],'$fecha_reserva','$fecha_entrada',$noches);";
mysqli_query($conexion, $sql);
header("location:../index.php")
?>