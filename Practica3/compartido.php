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
            <!-- Contenedor de compartido -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <div class="row">
                    <!-- Filtrar Favoritas -->
                    <div class="col-md-2 mt-2">
                        <a href="#" class="h6 text-decoration-none">Favoritas</a>
                    </div>
                    <!-- Ordenar notas -->
                    <div class="col-md-2 mt-2">
                        <a href="#" class="h6 text-decoration-none">Ordenar</a>
                    </div>
                    <!-- Barra de búsqueda -->
                    <div class="col-md-6">
                        <form class="d-flex mb-5" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar nota..." aria-label="Buscar">
                            <button class="btn btn-outline-success" type="submit">
                                <img class="img-fluid mx-auto d-inline-block" src="imagenes/lupa.png" alt="perfil">
                            </button>
                        </form>
                    </div>
                    <!-- Acceso al perfil -->
                    <div class="col-md-2 mt-2">
                        <a href="perfil.php">
                            <img class="perfil-icono img-fluid mx-auto d-block float-end" src="imagenes/perfil.png" alt="logo">
                        </a>
                    </div> 
                </div>
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold my-3">NOTAS COMPARTIDAS</h3>
                <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="min-height: 25vh;">
                    <p class="text-dark fw-bold mb-4">Todavía no has creado ninguna nota compartida.</p>
                    <!-- Crear nota -->
                    <button type="button" class="btn btn-secondary btn-block">
                        <img src="imagenes/añadir.png" alt="añadir" class="boton-add d-inline-block mx-1">Crear nota
                    </button>
                </div>
                <!-- Contactos sugeridos -->
                <h3 class="text-warning fw-bold my-3">Contactos sugeridos</h3>
                <img src="imagenes/sugeridos.png" alt="sugeridos" class="img-fluid d-inline-block mx-1 mb-4">
                <a href="#" style="text-decoration: none;"><p class="text-secondary" >todos...</p></a>
            </div>
        </div>
    </div>
</body>
</html> 