<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <!-- Enlace a Materialize CSS -->
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
</head>
<body>



<?php
session_start();
$nombre_usuario = $_SESSION['username'];

if (!isset($nombre_usuario)) {
    header("location: ./index.php");
} else {
    echo "<h3>Hola, tu nombre de usuario es $nombre_usuario</h3>";
    echo "<a href='./Logica/salir.php' class = 'btn waves-effect waves-light'>SALIR</a>";

    // Incluir la conexión
    require "./Logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    // Generar el query
    $consulta_sql = "SELECT * FROM cliente";

    // Ejecutar el query y almacenar el resultado
    $resultado = $conexion->query($consulta_sql);

    // Retorna el número de filas del resultado.
    $count = mysqli_num_rows($resultado);

    // Estilos de Materialize para la tabla
    echo "<div class='container'>";
    echo "<table class='striped centered responsive-table'>
            <thead>
              <tr>
                <th>Usuario</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
                <th>Contraseña</th>
                <th>Fecha de Registro</th>
              </tr>
            </thead>
            <tbody>";

    if ($count > 0) {
        // Pintar los registros de la base de datos
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['nombre_usuario'] . "</td>";
            echo "<td>" . $row['direccion'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['fecha_registro'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6' class='red-text'>Sin ningún registro</td></tr>";
    }

    echo "</tbody>
          </table>
          </div>";

    echo "<div class='container'>
            <h5><a href='EliminarUsuario.php' class='btn red'>Eliminar Usuario</a></h5>
            <h5><a href='Registro.php' class='btn blue'>Registro</a></h5>
          </div>";
}
?>

<!-- Enlace a Materialize JS y sus dependencias -->
<script src="../materialize/js/materialize.min.js"></script>
</body>
</html>
