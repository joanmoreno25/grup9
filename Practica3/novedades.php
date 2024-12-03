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
            <!-- Contenedor de novedades -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold mt-4">NOVEDADES Y ACTUALIZACIONES</h3>
                <div class="small">
                    <p class="text-secondary">¡Bienvenido a la sección de Novedades y Actualizaciones de TomaNota! Aquí te mantendremos informado sobre las últimas mejoras, nuevas funciones, y cualquier actualización importante que hemos realizado en nuestra plataforma. ¡Estamos siempre trabajando para ofrecerte una mejor experiencia!</p>
                    <p class="text-secondary m-0"><strong>Octubre 2024 - Nueva Interfaz de Usuario 🎨</strong></p>
                    <p class="text-secondary">Hemos rediseñado la interfaz de usuario de TomaNota para hacerla más intuitiva y moderna. Ahora podrás navegar más fácilmente entre tus notas, personalizar el aspecto de la plataforma con nuevos temas y colores, y disfrutar de una experiencia más fluida en dispositivos móviles.</p>
                    <ul class="text-secondary">
                        <li>Nuevo modo oscuro para una experiencia de escritura más cómoda en ambientes con poca luz.</li>
                        <li>Mejora de la navegación lateral, permitiendo un acceso más rápido a tus cuadernos y etiquetas.</li>
                        <li>Nuevas opciones de personalización con temas y colores para la interfaz.</li>
                    </ul>
                    <p class="text-secondary m-0"><strong>Septiembre 2024 - Integración con Google Drive y Archivos locales 📁</strong></p>
                    <p class="text-secondary">¡Ahora puedes sincronizar y adjuntar archivos directamente desde Google Drive y Archivos locales a tus notas en TomaNota! Esta integración te permitirá acceder a todos tus archivos almacenados en la nube sin salir de nuestra plataforma.</p>
                    <ul class="text-secondary">
                        <li>Adjuntar documentos, imágenes y archivos con un solo clic.</li>
                        <li>Sincronizar y gestionar tus archivos sin necesidad de descargas intermedias.</li>
                        <li>Actualización automática de los archivos adjuntos si son modificados en la nube.</li>
                    </ul>
                    <p class="text-secondary m-0"><strong>Agosto 2024 - Mejora del rendimiento y corrección de errores 🛠️</strong></p>
                    <p class="text-secondary">En agosto, nos enfocamos en mejorar el rendimiento general de la plataforma y corregir algunos problemas técnicos reportados por nuestros usuarios.</p>
                    <ul class="text-secondary">
                        <li>Reducción del tiempo de carga de las notas más grandes.</li>
                        <li>Corrección de un error que provocaba fallos al sincronizar las notas entre dispositivos.</li>
                        <li>Optimización del rendimiento en dispositivos móviles para una navegación más rápida y estable.</li>
                    </ul>
                    <p class="text-secondary m-0"><strong>Julio 2024 - Nueva funcionalidad de Colaboración 🤝</strong></p>
                    <p class="text-secondary">¡Estamos encantados de anunciar que ahora puedes colaborar con otros usuarios! Esta nueva funcionalidad te permitirá trabajar en equipo, editar notas y ver los cambios en tiempo real, lo que es perfecto para proyectos compartidos o trabajo en grupo.</p>
                    <ul class="text-secondary">
                        <li>Edición de notas con otros usuarios.</li>
                        <li>Historial de cambios para ver quién editó qué, y cuándo.</li>
                    </ul>
                    <p class="text-secondary m-0"><strong>Junio 2024 - Nuevas Etiquetas Inteligentes 🏷️</strong></p>
                    <p class="text-secondary">Organizar tus notas es aún más fácil con nuestras etiquetas inteligentes. Estas etiquetas se asignan automáticamente según el contenido de tus notas, ayudándote a categorizar tu información sin esfuerzo.</p>
                    <ul class="text-secondary">
                        <li>Identificación automática de temas y categorías en tus notas.</li>
                        <li>Sugerencias de etiquetas según el contenido que escribes.</li>
                        <li>Búsqueda rápida de notas utilizando las etiquetas inteligentes.</li>
                    </ul>
                    <!-- Mantente informado -->
                    <p class="text-secondary m-0"><strong>Mantente Informado</strong></p>
                    <p class="text-secondary">No olvides revisar esta sección periódicamente para estar al tanto de las últimas actualizaciones y mejoras. También puedes suscribirte a nuestro boletín para recibir actualizaciones directamente en tu correo electrónico.</p>
                </div>                                             
            </div>
        </div>
    </div>
</body>
</html> 