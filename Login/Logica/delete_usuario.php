<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['nombre_usuario'];
$consulta="DELETE FROM cliente WHERE nombre_usuario = '$registroEliminado'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header("Location: ../EliminarUsuario.php");
?>