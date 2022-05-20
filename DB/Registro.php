<?php

session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepcion de las datos enviados mediante el metodo post desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] :'';
$password = (isset($_POST['password'])) ? $_POST['password'] :'';

$pass = md5($password); //encriptacion de la clave enviada por el usuario para compararla con la clave en la DB

//$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password='$pass'";
$consulta = "INSERT INTO Usuarios (usuario,password) VALUES ('$usuario','$pass')";
$resultado = $conexion -> prepare($consulta);
$resultado->execute();

if ($resultado->rowCount() >= 1) {
    $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
    $_SESSION ["s_usuario"] = $usuario;

}else {
    $_SESSION ["s_usuario"] = null;
    $data=null;
}
print json_encode($data);
$conexion=null;
?>