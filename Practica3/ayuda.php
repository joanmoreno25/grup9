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
            <!-- Contenedor de ayuda -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <!-- Acceso al perfil -->
                <a href="perfil.php">
                    <img class="perfil-icono img-fluid mx-auto d-block float-end" src="imagenes/perfil.png" alt="logo">
                </a>
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold my-4">AYUDA</h3>
                <!-- Botones de ayuda -->
                <div class="row mt-5">
                    <!-- Botones izquierdos -->
                    <div class="col-xl-6">
                        <div class="d-grid gap-5 mx-5">
                            <a href="faq.php" class="btn btn-lg btn-primary btn-block">Preguntas frecuentes</a>
                            <a href="politica_privacidad.php" class="btn btn-lg btn-primary btn-block">Política de privacidad</a>
                            <a href="politica_cookies.php" class="btn btn-lg btn-primary btn-block">Política de cookies</a>
                        </div>
                    </div>
                    <!-- Botones derechos -->
                    <div class="col-xl-6">
                        <div class="d-grid gap-5 mx-5">
                            <a href="contacto.php" class="btn btn-lg btn-primary btn-block">Contacto</a>
                            <a href="aviso_legal.php" class="btn btn-lg btn-primary btn-block">Aviso legal</a>
                            <a href="novedades.php" class="btn btn-lg btn-primary btn-block">Novedades y actualizaciones</a>
                        </div>
                    </div>
                </div>
                                                           
            </div>
        </div>
    </div>
</body>
</html> 