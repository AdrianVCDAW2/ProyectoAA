<?php
require_once("../config/conectar.php");
session_start();
$habitacion = $_GET["habitacion"] . "_01";
$cliente = $_SESSION["id"];
$fecha_reserva = date('y-m-d');
$fecha_entrada = $_GET["fecha_entrada"];
$noches = $_GET["noches"];
$sql = "SELECT precio_noche FROM `habitaciones` WHERE id_habitacion='".$habitacion."';";
$resul = mysqli_query($conexion, $sql);
while ($precios = mysqli_fetch_array($resul)){
    $precio[] = $precios;
}
$precio = $precio[0][0] * $noches;

$sql = "UPDATE `reservas` SET fecha_reserva='$fecha_reserva', `fecha_entrada`='$fecha_entrada', `n_noches`=$noches, `precio_total`=$precio WHERE `id_reserva`=;";
mysqli_query($conexion, $sql);
header("location:../index.php")
?>