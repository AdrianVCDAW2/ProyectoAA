<?php
require "config/conectar.php";
$reserva_modificar = $_POST['modificar'];
$sql = "SELECT * FROM reservas WHERE id_cliente = '".$_SESSION["id"][0]."' AND id_reserva = '".$reserva_modificar."'";
$resul = mysqli_query($conexion,$sql);
while ($reserva = mysqli_fetch_array($resul)){
    $modificar[] = $reserva;
}

$fecha = $modificar[0]['fecha_entrada'];
$noches = $modificar[0]['n_noches'];
$individual = "";
$doble = "";
$triple = "";
$suite = "";
$tipo_habitacion = $_POST['tipo_habitacion'];
${$tipo_habitacion} = "selected";
echo '
<form method="get" action="controlador/modificar_reserva.php">
    Tipo de habitación: <select required name="habitacion">
        <option selected disabled>--Elige un tipo de habitación</option>
        <option value="individual" '.$individual.'>Individual</option>
        <option value="doble" '.$doble.'>Doble</option>
        <option value="triple" '.$triple.'>Triple</option>
        <option value="suite" '.$suite.'>Suite</option>
    </select>
    <br><br>
    Fecha entrada: <input type="date" name="fecha_entrada" value="'.$fecha.'" required>
    <br><br>
    Nº de noches: <input type="number" name="noches" value="'.$noches.'" required>
    <br><br>
    <input type="hidden" name="reserva" value="'.$reserva_modificar.'">
    <input type="submit" name="sesion" value="Modificar reserva">
    <br><br>
</form>';
?>