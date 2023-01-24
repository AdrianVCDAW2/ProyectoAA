<?php
require_once("../config/conectar.php");
session_start();
$habitacion = $_GET["habitacion"] . "_01";
$cliente = $_SESSION["id"];
$fecha_reserva = date('y-m-d');
$fecha_entrada = $_GET["fecha_entrada"];
$noches = $_GET["noches"];
// obtener precio por noche y dar precio total
$sql = "SELECT precio_noche FROM `habitaciones` WHERE id_habitacion='".$habitacion."';";
$resul = mysqli_query($conexion, $sql);
while ($precios = mysqli_fetch_array($resul)){
    $precio[] = $precios;
}
$precio = $precio[0][0] * $noches;

$sql = "INSERT INTO `reservas` (`id_habitacion`, `id_cliente`, `fecha_reserva`, `fecha_entrada`, `n_noches`, `precio_total`) VALUES ('$habitacion',$cliente[0],'$fecha_reserva','$fecha_entrada',$noches,$precio);";
mysqli_query($conexion, $sql);
header("location:../index.php")
?>