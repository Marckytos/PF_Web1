<?php
require 'conexion.php';
session_start();

$nombre_usuario = $_POST['nombre_usuario'];
$clave = $_POST['clave'];


//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) as contar from cliente where nombre_usuario= '$nombre_usuario' and password = '$clave'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['username'] = $nombre_usuario;

    header("location: ../Principal.php");
    //header("location: ../inicio.php");
    
} else {

    header("location: ../indexError.php");
}
?>