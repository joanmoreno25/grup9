<?php
// Incluir los archivos necesarios
require_once("Usuari.php");
require_once("../helpers/valida.php");

// Verificar si el formulario de login fue enviado
if ($_POST) {

    // Instanciar la clase Usuari
    $usuario = new Usuari();

    // Iniciar sesión con las variables del formulario
    $resultado = $usuario->validarUsuario($_POST["email"], $_POST["passwd"]);

    // Verificar el resultado del login
    if ($resultado) {
        // Login fallido: Redirigir a la página de error
        header('Location: ../error.php');
    } else {
        // Login exitoso: Establecer las variables de sesión y redirigir al dashboard
        $nombre = $usuario->nombreUsuario($_POST["email"], $_POST["passwd"]);
        $apellido = $usuario->apellidoUsuario($_POST["email"], $_POST["passwd"]);

        // Obtener los valores adicionales
        $telefono = $usuario->telefonoUsuario($_POST["email"], $_POST["passwd"]);
        $direccion = $usuario->direccionUsuario($_POST["email"], $_POST["passwd"]);
        $descripcion = $usuario->descripcionUsuario($_POST["email"], $_POST["passwd"]);

        // Establecer las variables de sesión
        $usuario->establecerVariablesSesion($nombre, $apellido, $_POST["email"], $_POST["passwd"]);
        $usuario->establecerVariablesSesion2($telefono, $direccion, $_POST["passwd"], $descripcion);
        header('Location: ../dashboard.php');
    }
}
?>
