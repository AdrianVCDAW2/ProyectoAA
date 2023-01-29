<?php
$descuento = "";
if ($_SESSION["tipo_usuario"][0] == "empleado") {
    $descuento = "<p>Los empleados tienen <span class='red'>descuento</span></p><br>";
}
$individual = "";
$doble = "";
$triple = "";
$suite = "";
if (isset($_GET['tipo_habitacion'])){
//    ${${$_GET['tipo_habitacion']}} = "selected";
    $tipo_habitacion = $_GET['tipo_habitacion'];
    ${$tipo_habitacion} = "selected";
}
echo '
<form class="form" method="get" action="controlador/crear_reserva.php">
    Tipo de habitación: <select required name="habitacion">
        <option selected disabled>--Elige un tipo de habitación</option>
        <option value="individual" '.$individual.'>Individual</option>
        <option value="doble" '.$doble.'>Doble</option>
        <option value="triple" '.$triple.'>Triple</option>
        <option value="suite" '.$suite.'>Suite</option>
    </select>
    <br><br>
    Fecha entrada: <input type="date" name="fecha_entrada" required">
    <br><br>
    Nº de noches: <input type="number" name="noches" required>
    <br><br>'.$descuento.'

    <input type="submit" name="sesion" value="Crear reserva">
    <br><br>
</form>';
?>