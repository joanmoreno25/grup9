<?php
// Incluir los archivos necesarios
require_once("Usuari.php");
require_once("../helpers/valida.php");

// Verificar si el formulario de registro fue enviado
if ($_POST) {
    // Verificar que las contraseñas coincidan
    if (validarPasswd($_POST["passwd"], $_POST["repetir_passwd"])) {

        // Instanciar la clase Usuari
        $usuario = new Usuari();

        // Registrar usuario con las variables del formulario
        $resultado = $usuario->altaUsuario($_POST["nombre"], $_POST["apellidos"], $_POST["email"], $_POST["passwd"]);

        // Verificar el resultado del registro
        if ($resultado) {
            // Registro fallido: Redirigir a la página de error
            header('Location: ../error.php');
        } else {
            // Registro exitoso: Establecer las variables de sesión y redirigir al dashboard
            $usuario->establecerVariablesSesion($_POST["nombre"], $_POST["apellidos"], $_POST["email"], $_POST["passwd"]);
            
            // Enviar correo de bienvenida
            $to = $_POST["email"];
            $subject = "Bienvenido a TomaNota";
            $message = "Estimado(a) " . $_POST["nombre"] . " " . $_POST["apellidos"] . ",\n\n" .
           "¡Bienvenido(a) a TomaNota!\n\n" .
           "Nos alegra tenerte como parte de nuestra comunidad. TomaNota es la herramienta perfecta para capturar y organizar tus ideas, tareas y recordatorios, todo en un solo lugar.\n\n" .
           "Si necesitas ayuda, nuestro equipo de soporte está disponible en info.tomanota@gmail.com.\n\n" .
           "Gracias por elegir TomaNota para mantener tus pensamientos organizados. ¡Esperamos que lo disfrutes!\n\n" .
           "Atentamente,\n" .
           "El equipo de TomaNota\n";
           $headers = "From: TomaNota <no-reply@tomanota.com>\r\n" .
           "Reply-To: no-reply@tomanota.com\r\n" .
           "X-Mailer: PHP/" . phpversion();

            mail($to, $subject, $message, $headers);

            // Redirigir al dashboard
            header('Location: ../dashboard.php');
        }
    } else {
        //Si las contraseñas no coinciden redirige a la página de error
        $error = $_SESSION["errorNumber"] = 1;
        header('Location: ../error.php');
    }  
}
?>
