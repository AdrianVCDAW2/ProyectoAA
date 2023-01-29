<?php
error_reporting(0);
echo "<table><tr><th>TIPO HABITACION</th><th>FECHA RESERVA</th><th>FECHA ENTRADA</th><th>N. NOCHES</th><th>PRECIO TOTAL</th><th>ELIMINAR</th><th>MODIFICAR</th></tr>";
foreach ($reservas as $reserva) {
    echo "<tr><td>". ucfirst(substr($reserva['id_habitacion'],0,-3))."</td><td>". $reserva['fecha_reserva'].
        "</td><td>". $reserva['fecha_entrada']."</td><td>". $reserva['n_noches']."</td><td>". $reserva['precio_total']."</td><td><form action='controlador/anular_reserva.php' method='post'><input type='hidden' name='anular' value='".$reserva['id_reserva']."' ><input type='submit' value='Eliminar'></form></td><td><form action='?opcion=modificar_reserva' method='post'><input type='hidden' name='modificar' value='".$reserva['id_reserva']."' ><input type='hidden' name='tipo_habitacion' value='".substr($reserva['id_habitacion'],0,-3)."'><input type='submit' value='Modificar'></form></td></tr>";
}
echo "</table>";
if (!$reservas){
    echo "No hay ninguna reserva";
}
?>