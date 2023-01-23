<form method="get" action="controlador/crear_reserva.php">
    Tipo de habitación: <select required name="habitacion">
        <option selected disabled>--Elige un tipo de habitación</option>
        <option value="individual">Individual</option>
        <option value="doble">Doble</option>
        <option value="triple">Triple</option>
        <option value="suite">Suite</option>
    </select>
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