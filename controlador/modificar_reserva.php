<?php
require_once("../config/conectar.php");
session_start();
$id = $_GET["reserva"];
$habitacion = $_GET["habitacion"] . "_01";
$cliente = $_SESSION["id"][0];
$fecha_reserva = date('y-m-d');
$fecha_entrada = $_GET["fecha_entrada"];
$noches = $_GET["noches"];
$sql = "SELECT precio_noche FROM `habitaciones` WHERE id_habitacion='".$habitacion."';";
$resul = mysqli_query($conexion, $sql);
while ($precios = mysqli_fetch_array($resul)){
    $precio[] = $precios;
}
$sql = "SELECT tipo_usuario FROM `usuarios` WHERE id_usuario='".$cliente[0]."';";
$resul = mysqli_query($conexion, $sql);
while ($tipos = mysqli_fetch_array($resul)){
    $tipo[] = $tipos;
}
$tipo_usuario = $tipo[0][0];
if ($tipo_usuario == "empleado") {
    $precio = ($precio[0][0] * $noches) / 2;
}
else {
    $precio = $precio[0][0] * $noches;
}
echo $cliente;
$sql = "UPDATE `reservas` SET id_habitacion= '$habitacion', fecha_reserva='$fecha_reserva', fecha_entrada='$fecha_entrada', n_noches=$noches, precio_total=$precio WHERE id_reserva=".$id;
echo $sql;
mysqli_query($conexion, $sql);
header("location:../index.php")
?>