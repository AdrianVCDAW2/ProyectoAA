<?php
echo "<table><tr><td>ID RESERVA</td><td>ID HABITACION</td><td>ID CLIENTE</td><td>FECHA RESERVA</td><td>FECHA ENTRADA</td><td>N. NOCHES</td></tr>";
foreach ($reservas as $reserva) {
    echo "<tr><td>". $reserva['id_reserva']."</td><td>". $reserva['id_habitacion']."</td><td>". $reserva['id_cliente']."</td><td>". $reserva['fecha_reserva'].
        "</td><td>". $reserva['fecha_entrada']."</td><td>". $reserva['n_noches']."</td></tr>";
}
echo "</table>";
?>