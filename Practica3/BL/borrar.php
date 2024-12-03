<?php
// Incluir los archivos necesarios
require_once("Usuari.php");

// Verificar si el formulario de eliminación fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Instanciar la clase Usuari
    $usuario = new Usuari();

    // Eliminar usuario con las variables de sesión
    $resultado = $usuario->eliminarUsuario();

    // Verificar el resultado de la eliminación de cuenta
    if ($resultado) {
        // Eliminación fallida: Redirigir a la página de error
        header('Location: ../error.php');
    } else {
        // Eliminación exitosa: Eliminar todas las variables de sesión, destruir sesión y redirigir al inicio
        session_unset();
        session_destroy();
        header('Location: ../index.html');
    }
}
?>
