<?php
require_once("../config/conectar.php");
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$passwd = $_POST["passwd"];
$tipo = $_POST["tipo"];
if ($_FILES['profilepic']['error'] == 0) {
    $temp_file = $_FILES['profilepic']['tmp_name'];
    $target_file = '../uploads/profilepics/' . $_FILES['profilepic']['name'];
    move_uploaded_file($temp_file, $target_file);
}
$sql = "INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo_usuario`, `passwd_usuario`, `tipo_usuario`, `perfil_usuario`) VALUES (NULL,'" . $usuario . "','" . $correo . "','" . $passwd . "','" . $tipo . "','".$_FILES['profilepic']['name']."');";
mysqli_query($conexion, $sql);
header("location:../index.php")
?>