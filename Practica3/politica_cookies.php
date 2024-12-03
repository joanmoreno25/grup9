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
            <!-- Contenedor de política de cookies -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold mt-4">POLÍTICA DE COOKIES</h3>
                <p class="text-dark">Última actualización: 17/10/2024</p>
                <div class="small">
                    <p class="text-secondary">Esta Política de Cookies explica cómo TomaNota utiliza cookies y tecnologías similares en nuestro sitio web y servicios relacionados. Al utilizar nuestro sitio web, aceptas el uso de cookies conforme a esta política.</p>
                    <!-- Apartado 1 -->
                    <p class="text-secondary m-0">1. ¿Qué son las cookies?</p>
                    <p class="text-secondary">Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo (ordenador, teléfono móvil, tablet, etc.) cuando visitas una página web. Las cookies permiten a la página web recordar tus acciones y preferencias (como el inicio de sesión, idioma, y otras configuraciones) para mejorar tu experiencia de usuario.</p>
                    <!-- Apartado 2 -->
                    <p class="text-secondary m-0">2. Tipos de cookies que utilizamos</p>
                    <p class="text-secondary">En TomaNota, utilizamos varios tipos de cookies para diferentes propósitos. Estos incluyen:</p>
                    <p class="text-secondary m-0">a) Cookies estrictamente necesarias</p>
                    <p class="text-secondary">Estas cookies son esenciales para que puedas navegar por el sitio y utilizar sus características. Sin estas cookies, algunos servicios o funcionalidades no podrían prestarse correctamente. Por ejemplo:</p>
                    <ul class="text-secondary">
                        <li>Mantener tu sesión activa mientras navegas.</li>
                        <li>Recordar información de inicio de sesión para que no tengas que volver a introducirla cada vez que accedas.</li>
                    </ul>
                    <p class="text-secondary m-0">b) Cookies de funcionalidad</p>
                    <p class="text-secondary">Estas cookies permiten que el sitio web recuerde las opciones que has elegido (como tu nombre de usuario, idioma, o región) y proporcionan características mejoradas y más personalizadas. Por ejemplo:</p>
                    <ul class="text-secondary">
                        <li>Recordar tus preferencias de personalización para las notas.</li>
                        <li>Guardar tus configuraciones de visualización.</li>
                    </ul>
                    <p class="text-secondary m-0">c) Cookies de rendimiento</p>
                    <p class="text-secondary">Estas cookies recolectan información sobre cómo los usuarios interactúan con nuestro sitio, lo que nos permite medir el rendimiento de las páginas y mejorarlas. Toda la información recopilada por estas cookies es anónima y solo se utiliza para mejorar el funcionamiento del sitio. Ejemplos incluyen:</p>
                    <ul class="text-secondary">
                        <li>Análisis de tráfico en la página web para entender qué partes del sitio son más visitadas.</li>
                        <li>Identificar problemas técnicos o errores en las páginas.</li>
                    </ul>
                    <p class="text-secondary m-0">d) Cookies de publicidad o marketing (opcional)</p>
                    <p class="text-secondary">TomaNota no utiliza cookies de publicidad de terceros en este momento, pero si en el futuro decidimos implementarlas, te informaremos y te daremos la opción de gestionarlas.</p>
                    <!-- Apartado 3 -->
                    <p class="text-secondary m-0">3. Cookies de terceros</p>
                    <p class="text-secondary">Además de nuestras propias cookies, podemos permitir a terceros, como proveedores de análisis o de servicios, colocar cookies en tu dispositivo para los siguientes fines:</p>
                    <p class="text-secondary">Google Analytics: Para ayudarnos a entender cómo los usuarios interactúan con nuestro sitio, Google puede colocar cookies para recopilar datos de uso. Esto nos permite mejorar el servicio, pero toda la información recolectada es anónima. Consulta las políticas de privacidad de estos terceros para más detalles sobre sus prácticas en cuanto a cookies.</p>
                    <!-- Apartado 4 -->
                    <p class="text-secondary m-0">4. Gestión de cookies</p>
                    <p class="text-secondary">Puedes controlar y gestionar las cookies de diferentes maneras. La mayoría de los navegadores web te permiten bloquear o eliminar cookies, o recibir una advertencia antes de que se almacenen. Ten en cuenta que si deshabilitas las cookies, es posible que algunas funcionalidades de nuestro sitio web no funcionen correctamente.</p>
                    <p class="text-secondary">A continuación te indicamos cómo puedes gestionar las cookies en algunos de los navegadores más populares:</p>
                    <ul class="text-secondary">
                        <li>Google Chrome: Ve a Configuración > Privacidad y seguridad > Cookies y otros datos de sitios.</li>
                        <li>Mozilla Firefox: Ve a Opciones > Privacidad y seguridad > Cookies y datos del sitio.</li>
                        <li>Microsoft Edge: Ve a Configuración > Privacidad y servicios > Cookies y permisos del sitio.</li>
                        <li>Safari: Ve a Preferencias > Privacidad > Gestionar datos de sitios web.</li>
                    </ul>
                    <!-- Apartado 5 -->
                    <p class="text-secondary m-0">5. Cambios en esta Política de Cookies</p>
                    <p class="text-secondary">Podemos actualizar esta Política de Cookies de vez en cuando para reflejar cambios en nuestras prácticas o la normativa legal. Te notificaremos cualquier modificación significativa mediante un aviso en nuestra plataforma o por correo electrónico.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 