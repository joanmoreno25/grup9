<?php
// Incluir los archivos necesarios
require_once("Usuari.php");
require_once("../helpers/valida.php");

// Verificar si el formulario de actualización fue enviado
if ($_POST) {
    // Verificar que las contraseñas coincidan
    if (validarPasswd($_POST["passwd"], $_POST["repetir_passwd"])) {

        // Instanciar la clase Usuari
        $usuario = new Usuari();

        // Actualizar usuario con las variables del formulario
        $resultado = $usuario->actualizarPerfil($_POST["telefono"], $_POST["direccion"], $_POST["passwd"], $_POST["descripcion"]);

        // Verificar el resultado de la actualización
        if ($resultado) {
            // Actualización fallida: Redirigir a la página de error
            header('Location: ../error.php');
        } else {
            // Actualización exitosa: Establecer las variables de sesión y redirigir al dashboard
            $usuario->establecerVariablesSesion2($_POST["telefono"], $_POST["direccion"], $_POST["passwd"], $_POST["descripcion"]);
            header('Location: ../dashboard.php');
        }
    } else {
        //Si las contraseñas no coinciden redirige a la página de error
        $error = $_SESSION["errorNumber"] = 1;
        header('Location: ../error.php');
    }  
}
?>