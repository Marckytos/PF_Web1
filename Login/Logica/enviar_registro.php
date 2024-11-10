<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$nombreUser=$_POST['nombre_usuario'];

$buscarusuario="SELECT * FROM  cliente WHERE nombre_usuario ='$nombreUser'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='../Registro.php'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO cliente(
        nombre_usuario,direccion,telefono,email,password)
        VALUES(
            '$_POST[nombre_usuario]',
            '$_POST[direccion]',
            '$_POST[telefono]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        echo "<br> <h1>Usuario creado con exito</h1>";
        echo "<a href='../Registro.php'>Puedes generar un Nuevo registro</a>";
        echo "<a href='../Principal.php'>Ver registros</a>";
}
 

?>