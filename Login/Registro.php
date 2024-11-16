<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al CSS de Materialize desde el archivo local -->
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <title>Nuevo Registro</title>
</head>

<body>

    <header class="center-align">
        <h3>Nuevo Registro</h3>
    </header>

    <div class="container">
        <form action="./Logica/enviar_registro.php" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="nombre_usuario" type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                    <label for="nombre_usuario">Ingresa nombre de usuario</label>
                </div>
                <div class="input-field col s12">
                    <input id="email" type="email" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                    <label for="email">Correo</label>
                </div>
                <div class="input-field col s12">
                    <input id="direccion" type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu dirección particular">
                    <label for="direccion">Dirección Particular</label>
                </div>
                <div class="input-field col s12">
                    <input id="telefono" type="text" name="telefono" required maxlength="10" placeholder="Ingresa tu teléfono">
                    <label for="telefono">Teléfono</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" type="password" name="password" required maxlength="50" placeholder="Ingresa tu contraseña">
                    <label for="password">Contraseña</label>
                </div>
                <div class="center-align">
                    <button type="submit" name="submit" class="btn waves-effect waves-light">Enviar registro</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Enlace al JavaScript de Materialize desde el archivo local -->
    <script src="../materialize/js/materialize.min.js"></script>
</body>

</html>
<hr>
<a href='./Principal.php'>Ver registro</a>