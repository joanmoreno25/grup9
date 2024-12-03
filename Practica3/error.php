<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TomaNota</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="scss/custom.css" rel="stylesheet">
</head>
<!-- Recuadro del formulario -->
<body class="fondo">
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="formulario bg-white rounded-3 shadow p-5 bg-white" style="width: 35%;">
        <h2 class="text-center">Error</h2><br>

<?php
// Iniciamos la sesion
session_start();

// Definimos los mensajes de error según el número
$mensajesDeError = [
    1 => "Las contraseñas no coinciden. Por favor, verifique que ambas contraseñas sean iguales e intente nuevamente.",
    2 => "Hubo un problema al procesar su registro. Por favor, inténtelo más tarde o contacte con soporte si el problema persiste.",
    3 => "La contraseña no cumple con los requisitos de seguridad. Debe tener al menos 8 caracteres, incluir una letra mayúscula, un número y un carácter especial.",
    4 => "El formato del correo electrónico ingresado no es válido. Por favor, asegúrese de que esté correctamente escrito.",
    5 => "El correo electrónico o la contraseña son incorrectos. Por favor, verifique sus credenciales e intente nuevamente.",
    6 => "Acceso denegado. Para continuar, asegúrese de haber iniciado sesión con sus credenciales.",
    7 => "No se pudo eliminar la cuenta de la base de datos. Por favor, inténtelo nuevamente más tarde o contacte con soporte técnico para obtener ayuda.",
    8 => "Hubo un problema al actualizar el perfil. Por favor, verifique los datos ingresados e intente nuevamente o contacte con soporte técnico si el problema persiste.",
    9 => "El formato del número de teléfono ingresado no es válido. Por favor, asegúrese de que contenga únicamente dígitos y cumpla con los estándares de formato local.",
    10 => "El correo electrónico ya está en uso. Por favor, utilice una dirección de correo diferente o recupere su cuenta si ya está registrada."
];

// Comprovamos si hay error
if (isset($_SESSION['errorNumber'])) {
 echo $mensajesDeError[$_SESSION['errorNumber']];
 
 // Eliminamos las variables de sesión ya consumidas
 unset($_SESSION['errorNumber']);
}
else{
 echo "<p class='text-center'>Puede regresar a la página principal usando el botón inferior.</p>";
}

?>
<!-- Mostrar botón de vuelta -->
        <p>
            <a href="index.html" class="btn btn-primary text-white rounded-pill mx-auto d-block w-100 mt-5"> Volver </a>
        </p> 
    </div>
  </div>
</body>
</html>