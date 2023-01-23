<?php
require_once("../config/conectar.php");
$habitacion = $_GET["habitacion"] . "_01";
$cliente = $_GET["cliente"];
$fecha_reserva = date('y-m-d');
$fecha_entrada = $_GET["fecha_entrada"];
$noches = $_GET["noches"];
$sql = "INSERT INTO `reservas` (`id_habitacion`, `id_cliente`, `fecha_reserva`, `fecha_entrada`, `n_noches`) VALUES ('$habitacion',$cliente,'$fecha_reserva','$fecha_entrada',$noches);";
mysqli_query($conexion, $sql);
header("location:../index.php")
?>