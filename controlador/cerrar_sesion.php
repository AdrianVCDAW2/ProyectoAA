<?php
session_start();
session_unset();
echo "Session unsetted";
header("location:http://localhost/ProyectoAA")
?>