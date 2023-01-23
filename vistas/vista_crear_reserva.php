<form method="get" action="controlador/crear_reserva.php">
    ID de habitación: <input type="text" name="habitacion" required>
    <br><br>
    ID de cliente: <input type="text" name="cliente" required>
    <br><br>
    Fecha entrada: <input type="date" name="fecha_entrada" required">
    <br><br>
    Nº de noches: <input type="number" name="noches" required>
    <br><br>


    <input type="submit" name="sesion" value="Crear reserva">
    <br><br>
</form>