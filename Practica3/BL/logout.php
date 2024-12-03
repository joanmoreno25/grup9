<?php
// Iniciar la sesión
session_start();  

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al login o página de inicio
header('Location: ../index.html');
?>
