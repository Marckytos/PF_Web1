<?php
session_start();
$nombre_usuario= $_SESSION['username'];


if(!isset($no_cuenta)){

        header("location: ./index.php");
}else{
    
    echo "<h1> hola tu nombre de usuario es  $nombre_usuario </h1> ";
    echo "<a href='logica/salir.php'> SALIR</a>";
    

    // se usa el requiere para si psi se necesita el archivo conexion
require "./Logica/conexion.php";
mysqli_set_charset($conexion,'utf8');

//genear el query
$consulta_sql="SELECT * FROM cliente";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>Usuario</th>
        
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Contraseña</th>
        <th>Fecha de Registro</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['direccion'] ."</td>";
     echo"<td>". $row['telefono'] ."</td>";
     echo"<td>". $row['email'] ."</td>";
     echo"<td>". $row['password'] ."</td>";
     echo"<td>". $row['fecha_registro'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    
    echo " <h1 style='color:red' >Sin Ningun registro</h1>";
 } 
  echo "
    <h1><a href='EliminarUsuario.php'>ElimnarUsuario</a></h1>
    <h1><a href='Registro.php'>Registro</a></h1>
    ";
    



}


?>