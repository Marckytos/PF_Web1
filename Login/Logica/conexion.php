<?php
#$host_db="localhost:3306";
#$user_db="root";
#$pass_db="toor";
#$db_name="registros";

$host_db="sql100.infinityfree.com";
$user_db="if0_37329559";
$pass_db="Rdkct0829FZ2PXU";
$db_name="if0_37329559_registros";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando.</h2>";
}


?>