<?php
session_start(); // Inicia la sesión
// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header("Location: ./Logica/inicio_sesion.php"); // Redirige a la página de login si no hay sesión activa
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <!-- CSS de Materialize -->
    <link href="../parallax-template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../parallax-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="teal lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">Eliminar Usuario</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="Principal.php">Inicio</a></li>
                <li><a href="./Logica/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
            <ul id="nav-mobile" class="sidenav">
                <li><a href="Principal.php">Inicio</a></li>
                <li><a href="./Logica/salir.php">Cerrar Sesión</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <!-- Sección de encabezado con Parallax -->
    <div class="parallax-container">
        <div class="parallax"><img src="../parallax-template/background1.jpg" alt="Fondo"></div>
    </div>

    <!-- Contenido principal -->
    <div class="container section">
        <h1 class="center-align">Eliminar Usuario</h1>
        <form method="POST" action="./Logica/delete_usuario.php" class="center-align">
            <div class="input-field">
                <input id="nombre_usuario" type="text" name="nombre_usuario" placeholder="" required>
                <label for="nombre_usuario">Nombre de Usuario</label>
            </div>
            <button class="btn waves-effect waves-light red" type="submit">
                Eliminar Usuario
                <i class="material-icons right">delete</i>
            </button>
        </form>
        <div class="center-align" style="margin-top: 20px;">
            <a href="Principal.php" class="btn waves-effect waves-light teal">
                <i class="material-icons left">home</i>Volver al Inicio
            </a>
        </div>
    </div>

    <!-- Segunda sección de Parallax -->
    <div class="parallax-container valign-wrapper">
        <div class="parallax"><img src= "../parallax-template/background2.jpg" alt="Fondo 2"></div>
    </div>

    <!-- Footer -->
    <footer class="page-footer teal lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Sistema de Usuarios</h5>
                    <p class="grey-text text-lighten-4">Administra usuarios con facilidad.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Enlaces</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="Principal.php">Inicio</a></li>
                        <li><a class="grey-text text-lighten-3" href="./Logica/salir.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2024 Sistema de Gestión de Usuarios
            </div>
        </div>
    </footer>

    <!-- Scripts de Materialize -->
    <script src="../parallax-template/js/materialize.min.js"></script>
    <script src="../parallax-template/js/materialize.js"></script>
    <script src="../parallax-template/js/init.js"></script>
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
