<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Recuperar datos del formulario
$nombreUser = $_POST['nombre_usuario'];

// Buscar si el usuario ya existe
$buscarusuario = "SELECT * FROM cliente WHERE nombre_usuario = '$nombreUser'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <!-- Importar estilos de la plantilla -->
    <link href="../../parallax-template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../../parallax-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">Registro</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../Registro.php">Nuevo Registro</a></li>
                <li><a href="../Principal.php">Ver Registros</a></li>
            </ul>
        </div>
    </nav>

    <!-- Parallax Section -->
    <div class="parallax-container valign-wrapper">
        <div class="parallax"><img src="../../parallax-template/background2.jpg" alt="Background 1"></div>
    </div>

    <!-- Main Section -->
    <div class="container">
        <div class="section">
            <?php
            if ($count == 1) {
                // Usuario ya registrado
                echo "<h4 class='red-text'>El usuario ya está registrado</h4>";
                echo "<a href='../Registro.php' class='btn waves-effect waves-light'>Nuevo Registro</a>";
            } else {
                // Registrar nuevo usuario
                mysqli_query($conexion, "INSERT INTO cliente (
                    nombre_usuario, direccion, telefono, email, password)
                    VALUES (
                        '$_POST[nombre_usuario]',
                        '$_POST[direccion]',
                        '$_POST[telefono]',
                        '$_POST[email]',
                        '$_POST[password]'
                    )");
                echo "<h4 class='green-text'>Usuario creado con éxito</h4>";
                echo "<a href='../Registro.php' class='btn waves-effect waves-light'>Generar un Nuevo Registro</a>";
                echo "<a href='../Principal.php' class='btn waves-effect waves-light'>Ver Registros</a>";
            }
            ?>
        </div>
    </div>

    <!-- Parallax Section -->
    <div class="parallax-container">
        <div class="parallax"><img src="../../parallax-template/background3.jpg" alt="Background 2"></div>
    </div>

    <!-- Footer -->
    <footer class="blue darken-3 white-text">
        <div class="container center-align">
            &copy; 2024 Mi Proyecto
        </div>
    </footer>

    <!-- Scripts -->
    <script src="../../parallax-template/js/materialize.min.js"></script>
    <script src="../../parallax-template/js/materialize.js"></script>
    <script src="../../parallax-template/js/init.js"></script>
    <script>
         // Inicialización de componentes
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);

            var parallaxElems = document.querySelectorAll('.parallax');
            M.Parallax.init(parallaxElems);
        });
    </script>
</body>

</html>