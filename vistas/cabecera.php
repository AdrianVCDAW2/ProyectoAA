<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Aritz y Adrián</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/fontawesome/css/all.min.css">
</head>
<body>
    <?php
    $nav = "";
            session_start();
            if (isset($_SESSION['usuario'])) {
                require "config/conectar.php";
//                $sql = 'SELECT usuario FROM usuarios WHERE usuario="' . $_POST['usuario'] . '"';
                $sql = 'SELECT id_usuario FROM usuarios WHERE usuario="' . $_SESSION['usuario'] . '"';
                $resul = mysqli_query($conexion, $sql);
                while ($id = mysqli_fetch_array($resul))
                {
                    $_SESSION['id'] = $id;
                }
                echo "<div class='right'><p class='inline'>Bienvenido, " . $_SESSION['usuario'] . "</p>";

                $sql = "SELECT perfil_usuario FROM usuarios WHERE id_usuario = ".$_SESSION['id'][0];
                $resul = mysqli_query($conexion,$sql);
                while ($fotoPerfil = mysqli_fetch_array($resul)){
                    $_SESSION['profilepic'] = $fotoPerfil;
                }
                echo "<img src='uploads/profilepics/".$_SESSION['profilepic'][0]."' class='profile-pic'><a href='?opcion=gestionar_cuenta'><i class='fas fa-edit editar-arriba'></i></a>";
                echo "<form class='formRight' method='POST' action='controlador/cerrar_sesion.php'><input class='header_input' type='submit' value='Cerrar sesión'/></form></div>";
//                require "config/conectar.php";
//                $sql = 'SELECT perfil_usuario FROM usuarios WHERE usuario="' . $_SESSION['usuario'] . '"';
//                            $resul = mysqli_query($conexion, $sql);
//                            while ($profile = mysqli_fetch_array($resul))
//                            {
//                                $_SESSION['profile'] = $profile;
//                            }
                /*$sql = 'SELECT tipo FROM usuarios WHERE usuario="' . $_SESSION['usuario'] . '"';
                $resul = mysqli_query($conexion, $sql);
                while ($fila = mysqli_fetch_array($resul))
                {
                $tipo[] = $fila;
                }
                if ($tipo[0][0] == "admin") {
                    echo "<br><br>";
                    echo "<button type='button'>Modificar</button>";
                    echo "<button type='button'>Borrar</button>";
                }*/

                $nav .= "<li><a href='?opcion=ver_reservas' class='navLink'>Ver reservas</a></li>";
                $nav .= "<li><a href='?opcion=crear_reserva' class='navLink'>Crear reserva</a></li>";
                $nav .= "<li><a href='?opcion=gestionar_cuenta' class='navLink'>Gestionar cuenta</a></li>";
            }
            else {
                
                if (isset($_POST["usuario"])) {

                    require "config/conectar.php";
                    $sql = 'SELECT usuario FROM usuarios WHERE usuario="' . $_POST['usuario'] . '"';
                    $resul = mysqli_query($conexion, $sql);
                    $usuarios = null;
                    while ($fila = mysqli_fetch_array($resul))
                    {
                    $usuarios[] = $fila;
                    }
                    if (is_null($usuarios)) {
                        echo "No se ha encontrado usuario";
                    }
                    else {
                        $sql = 'SELECT passwd_usuario FROM usuarios WHERE usuario="' . $_POST['usuario'] . '"';
                        $resul = mysqli_query($conexion, $sql);
                        while ($fila = mysqli_fetch_array($resul))
                        {
                        $contra[] = $fila;
                        }
                        if($contra[0][0] == $_POST['passwd']){
                            $_SESSION['usuario'] = $_POST['usuario'];
                            echo "Sesion iniciada. Hola, " . $_POST['usuario'];
                            echo "<form method='POST' action='controlador/cerrar_sesion.php'><input type='submit' value='Cerrar sesión' /></form>";
                            header("location: http://localhost/ProyectoAA/?opcion=gestionar_cuenta");
                        }
                        else {
                            echo "Contraseña incorrecta";
                        }
                        
                    }

                }
                else {
                    echo '<form class="formRight" method="post" action="">  
                    Usuario: <input type="text" name="usuario" class="formUser">
                    <br><br>
                    Contraseña: <input type="password" name="passwd">
                    <br><br>

                    <input type="submit" name="sesion" value="Iniciar sesion"> 
                    <br><br> 
                    </form>';
                    $nav .= "<li><a href='?opcion=crear_usuario'>Crear usuario :)</a></li>";
                }
            }
    echo "<header><a href='http://localhost/ProyectoAA'><img class='logo' src='img/logo.png'></a><a href='http://localhost/ProyectoAA'<div class='title'>Hotel Aritz y Adrián<i class='fa fa-sun-o' aria-hidden='true'></i></div></a></header>";
    echo '<script>let logo = document.getElementsByClassName("logo")[0];console.log(logo);window.addEventListener("scroll",function(){
//    console.log("scroll");
if (pageYOffset > 0){
    logo.style.display = "none";
}else {
    logo.style.display = "block";
}
})</script>';
            echo "<nav>" . $nav . "</nav>";
    ?>
</body>
</html>