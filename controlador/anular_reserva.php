<?php
$reserva_anular = $_POST['anular'];
require_once "../config/conectar.php";
$sql = "DELETE FROM reservas WHERE id_reserva=".$reserva_anular;
mysqli_query($conexion,$sql);
header("location: http://localhost/ProyectoAA?opcion=ver_reservas");