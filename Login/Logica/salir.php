<?php
session_start();
session_unset(); // Eliminar variables de sesión
session_destroy();
header("location: ./inicio_sesion.php");
exit();
