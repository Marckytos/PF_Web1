<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Document</title>
</head>
<body>

    <header  >
        <h3>Registro en mi DB</h3>
    </header>
    
    <div>
        <form action="./Logica/enviar_registro.php" method="post">
        <!-- <form action="./tempo.php" method="get"> -->
            <hr>
            <div>
                <label for="nombre_usuario">Ingresa nombre usuario:</label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
                <label for="email">Correo:</label>
                <input type="mail" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>
                <label for="direccion">Direccion particular:</label>
                <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu direccion particular">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" required maxlength="10" placeholder="Ingresa tu telefono">
                <br><br>
                <label for="password">contraseña:</label>
                <input type="password" name="password" required maxlength="50" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
             <button type="submit" name="submit"  >Enviar registro</button>
        </form>
    </div>
</body>
</html>

<a href='./Registro.php'>Nuevo registro</a>
<hr>
<a href='./Principal.php'>Ver registro</a>