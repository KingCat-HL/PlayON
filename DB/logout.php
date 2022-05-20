<?php

session_start();
unset($_SESSION["s_usuario"]);
session_destroy();
header("Location:../Vistas/pag_inicio.php")

?>