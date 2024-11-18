<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../starter-template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../starter-template/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Mi App</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Inicio de Sesión</h1>
      <div class="row center">
        <h5 class="header col s12 light">Introduce tus credenciales para iniciar sesión</h5>
      </div>
      <br><br>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <form class="col s12 m6 offset-m3" method="POST" action="./Logica/inicio_sesion.php">
          <div class="row">
            <div class="input-field col s12">
              <input id="nombre_usuario" type="text" name="nombre_usuario" required>
              <label for="nombre_usuario">Nombre de Usuario</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="clave" type="password" name="clave" required>
              <label for="clave">Contraseña</label>
            </div>
          </div>
          <div class="row center">
            <button class="btn waves-effect waves-light orange" type="submit" name="action">Iniciar Sesión
              <i class="material-icons right">send</i>
            </button>
          </div>
          <div class="row center">
            <a href='./Registro.php' class="btn waves-effect waves-light blue">Nuevo Registro</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Acerca de Nosotros</h5>
          <p class="grey-text text-lighten-4">Somos un equipo de estudiantes desarrollando este proyecto.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Enlaces</h5>
          <ul>
            <li><a class="white-text" href="#!">Enlace 1</a></li>
            <li><a class="white-text" href="#!">Enlace 2</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Redes Sociales</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Hecho con <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="../starter-template/js/materialize.min.js"></script>
  <script src="../starter-template/js/materialize.js"></script>
  <script src="../starter-template/js/init.js"></script>
</body>
</html>
