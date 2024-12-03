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
            <!-- Contenedor de contacto -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold mt-4">CONTACTO</h3>
                <div class="small">
                    <p class="text-secondary">¡Gracias por tu interés en TomaNota! Si tienes alguna pregunta, comentario o sugerencia, estaremos encantados de ayudarte. A continuación, te ofrecemos diferentes formas para ponerte en contacto con nuestro equipo.</p>
                    <p class="text-secondary m-0"><strong>1. Formulario de contacto</strong></p>
                    <p class="text-secondary">Rellena el siguiente formulario y nos pondremos en contacto contigo lo antes posible:</p>
                    <div class="row">
                        <div class="col-xl">
                            <!-- Formulario de contacto -->
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6 mt-2 mb-2">
                                        <label for="nombre" class="form-label fw-lighter">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="col-sm-6 mt-2 mb-2">
                                        <label for="email" class="form-label fw-lighter">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="mb-4 mt-3">
                                  <label for="asunto" class="form-label fw-lighter">Asunto</label>
                                  <input type="text" class="form-control" id="asunto" name="asunto">
                                </div>
                                <div class="mb-4 mt-3">
                                    <label for="mensaje" class="form-label fw-lighter">Mensaje</label>
                                    <textarea type="text" class="form-control" id="mensaje" name="mensaje" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill px-5 mb-5">Enviar</button>
                            </form>
                        </div>
                        <div class="col-xl"></div>
                    </div>
                    <!-- Información de contacto adicional -->
                    <p class="text-secondary m-0"><strong>2. Correo electrónico</strong></p>
                    <p class="text-secondary m-0">Si prefieres enviarnos un correo electrónico, puedes escribirnos a:</p>
                    <p class="text-secondary m-0">📧 Correo electrónico: info.tomanota@gmail.com</p>
                    <p class="text-secondary">Atendemos todas las consultas en un plazo de 24 a 48 horas hábiles.</p>
                    <p class="text-secondary">Estamos aquí para ayudarte, ya sea que tengas una duda sobre cómo utilizar TomaNota, un problema técnico o simplemente quieras enviarnos tus comentarios sobre la plataforma. ¡Nos encantaría saber de ti!</p>
                </div>                                             
            </div>
        </div>
    </div>
</body>
</html> 