<?php
echo "<table><tr><th>TIPO HABITACION</th><th>FECHA RESERVA</th><th>FECHA ENTRADA</th><th>N. NOCHES</th></tr>";
foreach ($reservas as $reserva) {
    echo "<tr><td>". ucfirst(substr($reserva['id_habitacion'],0,-3))."</td><td>". $reserva['fecha_reserva'].
        "</td><td>". $reserva['fecha_entrada']."</td><td>". $reserva['n_noches']."</td><td><form action='controlador/anular_reserva.php' method='post'><input type='hidden' name='anular' value='".$reserva['id_reserva']."' ><input type='submit' value='Eliminar'></form></td></tr>";
}
echo "</table>";
?>