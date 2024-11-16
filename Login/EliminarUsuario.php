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
    <title>Document</title>
</head>

<body>
    <h1 style=" text-align: center;" >Eliminar Usuario</h1>
    <form style=" text-align: center;" method="POST" action="./Logica/delete_usuario.php">

        <input  type="text" name="nombre_usuario" placeholder="Nombre de usuario" />
        <br />
        <button type="submit">Eliminar usuario</button>

    </form>
    
    <h1><a href="Principal.php">Inicio de listas</a></h1>

</body>

</html>