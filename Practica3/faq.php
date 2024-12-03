<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user_logged']) || empty($_SESSION['user_logged'])) {
    // Si no está logueado, redirigir a error
    $error = $_SESSION["errorNumber"] = 6;
    header('Location: error.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TomaNota</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="scss/custom.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid vh-100">
        <!-- Barra lateral con botones -->
        <div class="row h-100">
            <div class="col-xl-2 col-md-3 col-sm-4 bg-primary p-5">
                <!-- Logo -->
                <a href="dashboard.php">
                    <img class="logo img-fluid mx-auto mb-4 d-block" src="imagenes/logo.png" alt="logo">
                </a>
                <!-- Botones de navegación -->
                <div class="d-grid gap-4">
                    <a href="dashboard.php" class="btn btn-warning btn-block">Mis notas</a>
                    <a href="compartido.php" class="btn btn-warning btn-block">Compartido</a>
                    <a href="papelera.php" class="btn btn-warning btn-block">Papelera</a>
                    <a href="ayuda.php" class="btn btn-warning btn-block">Ayuda</a>
                </div>
            </div>
            <!-- Contenedor de FAQ -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold mt-4">PREGUNTAS FRECUENTES (FAQ)</h3>
                <div class="small">
                    <p class="text-secondary">Bienvenido a la sección de Preguntas Frecuentes de TomaNota. Aquí encontrarás respuestas a las dudas más comunes sobre nuestra plataforma de creación y almacenamiento de notas. Si no encuentras la respuesta que buscas, no dudes en contactarnos.</p>
                    <!-- Apartado 1 -->
                    <p class="text-secondary m-0"><strong>1. ¿Qué es TomaNota?</strong></p>
                    <p class="text-secondary">TomaNota es una plataforma web diseñada para ayudarte a crear, organizar y almacenar tus notas personales de manera segura. Puedes escribir texto, añadir imágenes, grabaciones de voz y otros archivos para tener todo lo que necesitas en un solo lugar.</p>
                    <!-- Apartado 2 -->
                    <p class="text-secondary m-0"><strong>2. ¿Cómo puedo registrarme en TomaNota?</strong></p>
                    <p class="text-secondary m-0">Registrarte es muy sencillo:</p>
                    <ul class="text-secondary">
                        <li>Ve a la página de registro.</li>
                        <li>Introduce tu correo electrónico y crea una contraseña segura.</li>
                        <li>Recibirás un correo de confirmación para verificar tu cuenta. Haz clic en el enlace de confirmación y estarás listo para empezar a usar TomaNota.</li>
                    </ul>
                    <!-- Apartado 3 -->
                    <p class="text-secondary m-0"><strong>3. ¿Puedo usar TomaNota de manera gratuita?</strong></p>
                    <p class="text-secondary">Sí, TomaNota ofrece una versión gratuita con características básicas, que incluye un número limitado de notas y almacenamiento. También ofrecemos planes premium con más espacio y funciones avanzadas para aquellos que necesiten más capacidades.</p>
                    <!-- Apartado 4 -->
                    <p class="text-secondary m-0"><strong>4. ¿Cómo puedo subir imágenes o archivos a mis notas?</strong></p>
                    <p class="text-secondary m-0">Para subir imágenes o archivos adjuntos:</p>
                    <ul class="text-secondary">
                        <li>Abre una nota nueva o existente.</li>
                        <li>Haz clic en el botón de "adjuntar archivo".</li>
                        <li>Selecciona la imagen o archivo desde tu dispositivo y súbelo.</li>
                        <li>Puedes añadir múltiples archivos a cada nota según el plan que estés utilizando.</li>
                    </ul>
                    <!-- Apartado 5 -->
                    <p class="text-secondary m-0"><strong>5. ¿Mis notas están seguras en TomaNota?</strong></p>
                    <p class="text-secondary">Nos tomamos muy en serio la seguridad de tus datos. Utilizamos cifrado de extremo a extremo para proteger tus notas en tránsito y en reposo. Además, contamos con controles de acceso estrictos para garantizar que solo tú tengas acceso a tus notas. Para más información, puedes leer nuestra Política de Privacidad.</p>
                    <!-- Apartado 6 -->
                    <p class="text-secondary m-0"><strong>6. ¿Puedo acceder a mis notas desde diferentes dispositivos?</strong></p>
                    <p class="text-secondary">Sí, TomaNota está diseñado para ser accesible desde cualquier dispositivo con conexión a Internet. Puedes iniciar sesión desde tu ordenador, tablet o teléfono móvil, y todas tus notas se sincronizarán automáticamente entre los dispositivos.</p>
                    <!-- Apartado 7 -->
                    <p class="text-secondary m-0"><strong>7. ¿Qué hago si olvido mi contraseña?</strong></p>
                    <p class="text-secondary m-0">Si olvidas tu contraseña, sigue estos pasos:</p>
                    <ul class="text-secondary">
                        <li>Ve a la página de inicio de sesión.</li>
                        <li>Haz clic en "¿Olvidaste tu contraseña?"</li>
                        <li>Introduce tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</li>
                    </ul>
                    <!-- Apartado 8 -->
                    <p class="text-secondary m-0"><strong>8. ¿Puedo compartir mis notas con otras personas?</strong></p>
                    <p class="text-secondary">Sí, puedes compartir tus notas con otras personas a través de un enlace o invitándolos a colaborar en una nota específica. Solo tienes que hacer clic en el botón de "Compartir" dentro de una nota y elegir si deseas enviar un enlace o invitar a alguien por correo electrónico.</p>
                    <!-- Apartado 9 -->
                    <p class="text-secondary m-0"><strong>9. ¿TomaNota tiene una app móvil?</strong></p>
                    <p class="text-secondary">Actualmente estamos trabajando en una aplicación móvil para ofrecer una experiencia más fluida en dispositivos móviles. Mientras tanto, puedes acceder a TomaNota a través del navegador de tu móvil o tablet.</p>
                </div>
                               
            </div>
        </div>
    </div>
</body>
</html> 