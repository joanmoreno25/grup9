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
           <!-- Contenedor de política de privacidad -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold mt-4">POLÍTICA DE PRIVACIDAD</h3>
                <p class="text-dark">Última actualización: 17/10/2024</p>
                <div class="small">
                    <p class="text-secondary">En TomaNota valoramos tu privacidad y nos comprometemos a proteger los datos personales que compartes con nosotros. Esta Política de Privacidad explica cómo recolectamos, usamos, almacenamos y protegemos tu información cuando accedes a nuestro servicio de creación y almacenamiento de notas.</p>
                      <!-- Apartado 1 -->
                    <p class="text-secondary m-0">1. Información que Recolectamos</p>  
                    <p class="text-secondary m-0">a) Información proporcionada directamente por el usuario</p>
                    <p class="text-secondary">Al crear una cuenta o utilizar nuestros servicios, recolectamos la siguiente información:</p>
                    <ul class="text-secondary">
                        <li>Información personal: Nombre, dirección de correo electrónico, contraseña, y cualquier otra información que elijas proporcionar cuando te registras o actualizas tu cuenta.</li>
                        <li>Contenido de las notas: Toda la información que escribas, cargues o guardes en tus notas. Esto puede incluir texto, imágenes, archivos adjuntos, grabaciones de voz u otro contenido que elijas almacenar.</li>
                    </ul>
                    <p class="text-secondary m-0">b) Información recolectada automáticamente</p>
                    <p class="text-secondary">Cuando utilizas TomaNota, también recolectamos información automáticamente, que puede incluir:</p>
                    <ul class="text-secondary">
                        <li>Datos del dispositivo: Información sobre el dispositivo que usas para acceder a la plataforma, incluyendo el tipo de dispositivo, sistema operativo, identificador único del dispositivo, dirección IP, e información de uso del navegador.</li>
                        <li>Datos de uso: Información sobre cómo interactúas con el servicio, como el tiempo que pasas en la plataforma, funciones que utilizas, y configuraciones que ajustas.</li>
                    </ul>
                      <!-- Apartado 2 -->
                    <p class="text-secondary m-0">2. Cómo Usamos Tu Información</p>
                    <p class="text-secondary">Usamos la información que recolectamos para los siguientes fines:</p>
                    <ul class="text-secondary">
                        <li>Proporcionar el servicio: Para crear y mantener tu cuenta, permitirte guardar y acceder a tus notas, y ofrecer soporte técnico.</li>
                        <li>Mejorar el servicio: Para mejorar nuestras funcionalidades, experiencia de usuario y detectar problemas técnicos.</li>
                        <li>Comunicaciones: Enviar correos electrónicos sobre actualizaciones, cambios en el servicio, o cualquier notificación importante relacionada con tu cuenta.</li>
                        <li>Seguridad: Monitorear y prevenir actividades fraudulentas, y garantizar la integridad de la plataforma.</li>
                    </ul>
                      <!-- Apartado 3 -->
                    <p class="text-secondary m-0">3. Compartición de Información</p>
                    <p class="text-secondary">En TomaNota, no vendemos ni compartimos tu información personal con terceros para fines de marketing sin tu consentimiento. Sin embargo, podemos compartir información con terceros en las siguientes circunstancias:</p>
                    <ul class="text-secondary">
                        <li>Proveedores de servicios: Empresas que nos ayudan a proporcionar nuestros servicios, como el almacenamiento de datos, análisis y soporte al cliente. Estos proveedores están sujetos a estrictas obligaciones de confidencialidad.</li>
                        <li>Cumplimiento legal: Si se nos exige por ley, o si creemos de buena fe que la divulgación es necesaria para cumplir con procesos legales, solicitudes gubernamentales, o para proteger los derechos y seguridad de TomaNota, nuestros usuarios, o el público.</li>
                    </ul>
                      <!-- Apartado 4 -->
                    <p class="text-secondary m-0">4. Almacenamiento y Seguridad de los Datos</p>
                    <p class="text-secondary">Implementamos medidas técnicas, administrativas y físicas para proteger tu información frente a accesos no autorizados, pérdida, alteración o destrucción. Sin embargo, no podemos garantizar una seguridad absoluta. Algunos de los mecanismos de seguridad incluyen:</p>
                    <ul class="text-secondary">
                        <li>Cifrado: Los datos en tránsito y, en algunos casos, en reposo, son cifrados utilizando estándares avanzados.</li>
                        <li>Acceso controlado: Solo personal autorizado tiene acceso a la información personal y deben cumplir estrictas políticas de privacidad.</li>
                    </ul>
                      <!-- Apartado 5 -->
                    <p class="text-secondary m-0">5. Tus Derechos sobre la Información</p>
                    <p class="text-secondary">Tienes el derecho de:</p>
                    <ul class="text-secondary">
                        <li>Acceder: Ver la información personal que hemos recolectado sobre ti.</li>
                        <li>Rectificar: Corregir cualquier error en tu información personal.</li>
                        <li>Eliminar: Solicitar la eliminación de tu cuenta y los datos asociados a ella, excepto cuando la ley nos exija retenerlos por un período determinado.</li>
                        <li>Portabilidad: Obtener una copia de tus datos personales en un formato legible.</li>
                    </ul>
                    <p class="text-secondary">Para ejercer estos derechos, puedes contactar a nuestro equipo de soporte en info.tomanota@gmail.com</p>
                      <!-- Apartado 6 -->
                    <p class="text-secondary m-0">6. Cookies y Tecnologías Similares</p>
                    <p class="text-secondary">Utilizamos cookies y tecnologías similares para mejorar tu experiencia de usuario, personalizar el contenido, y analizar nuestro tráfico. Puedes configurar tu navegador para rechazar cookies, pero esto puede afectar algunas funcionalidades del servicio.</p>
                      <!-- Apartado 7 -->
                    <p class="text-secondary m-0">7. Transferencias Internacionales de Datos</p>
                    <p class="text-secondary">Tus datos pueden ser transferidos y almacenados en servidores ubicados fuera de tu país de residencia. Si esto ocurre, tomaremos las medidas necesarias para garantizar que tus datos estén protegidos de acuerdo con esta Política de Privacidad y las leyes aplicables.</p>
                      <!-- Apartado 8 -->
                    <p class="text-secondary m-0">8. Actualizaciones de esta Política</p>
                    <p class="text-secondary">Podemos actualizar esta Política de Privacidad ocasionalmente para reflejar cambios en nuestras prácticas o en la ley. Te notificaremos sobre cualquier cambio significativo mediante un aviso en nuestra plataforma o por correo electrónico.</p>
                </div>                
            </div>
        </div>
    </div>
</body>
</html> 