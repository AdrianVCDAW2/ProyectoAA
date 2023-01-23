<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/fontawesome/css/all.min.css">
</head>
<body>
    <header>
    <?php
    $nav = "";
            session_start();
            if (isset($_SESSION['usuario'])) {
                echo "<div class='right'><p class='inline'>Bienvenido, " . $_SESSION['usuario'] . "</p>";
                echo "<img src='img/avatar.jpg' class='profile-pic'><a href='?opcion=gestionar_cuenta'><i class='fas fa-edit editar-arriba'></i></a>";
                echo "<form method='POST' action='controlador/cerrar_sesion.php'><input class='header_input' type='submit' value='Cerrar sesión'/></form></div>";
                require "config/conectar.php";
                $sql = 'SELECT id_usuario FROM usuarios WHERE usuario="' . $_SESSION['usuario'] . '"';
                            $resul = mysqli_query($conexion, $sql);
                            while ($id = mysqli_fetch_array($resul))
                            {
                                $_SESSION['id'] = $id;
                            }
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

                $nav .= "<li><a href='?opcion=ver_reservas'>Ver reservas</a></li>";
                $nav .= "<li><a href='?opcion=crear_reserva'>Crear reserva :)</a></li>";
                $nav .= "<li><a href='?opcion=gestionar_cuenta'>Gestionar cuenta :)</a></li>";
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
                        }
                        else {
                            echo "Contraseña incorrecta";
                        }
                        
                    }

                }
                else {
                    echo '<form method="post" action="">  
                    Usuario: <input type="text" name="usuario">
                    <br><br>
                    Contraseña: <input type="password" name="passwd">
                    <br><br>

                    <input type="submit" name="sesion" value="Iniciar sesion"> 
                    <br><br> 
                    </form>';
                    $nav .= "<li><a href='?opcion=crear_usuario'>Crear usuario :)</a></li>";
                }
            }


            $nav .= "<li>4</li>";
    $nav .= "<li>5</li>";
    echo "<nav>" . $nav . "</nav>";
        ?>
        
    </header>
</body>
</html>