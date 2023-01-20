<form class="form" method="post" action="controlador/crear_usuario.php" enctype="multipart/form-data">
    Usuario: <input type="text" name="usuario" required>
    <br><br>
    Correo: <input type="mail" name="correo" required>
    <br><br>
    Contraseña: <input type="password" name="passwd" required>
    <br><br>
    Tipo de usuario: <select required name="tipo">
        <option selected disabled>--Elige un tipo de usuario</option>
        <option value="cliente">Cliente</option>
        <option value="empleado">Empleado</option>
        <option value="administrador">Administrador</option>
    </select>
    <br><br>
    <label for="profilepic">Foto de perfil</label>
    <input type="file" name="profilepic" id="profilepic" accept="image/png, image/gif, image/jpeg" required>

    <br><br>
    <input type="submit" name="sesion" value="Crear usuario">
</form>