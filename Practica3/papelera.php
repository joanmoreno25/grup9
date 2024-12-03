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
            <!-- Contenedor de papelera -->
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
                <h3 class="text-warning fw-bold my-3">ELIMINADO RECIENTEMENTE</h3>
                <P class="text-secondary mb-5">Los mensajes que lleven más de 30 días en la papelera se eliminarán automáticamente</P>
                <!-- Notas a eliminar -->
                <div class="row mt-3">
                    <div class="col-xl-4 mb-5">
                        <div class="card" style="width: 250px; height: 250px;">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">Nota 1</h4>
                                <p class="card-text">Hace 40 min</p>
                                <div class="btn-group mt-auto">
                                    <button type="button" class="btn btn-danger me-2">ELIMINAR</button>
                                    <button type="button" class="btn btn-success">RECUPERAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-5">
                        <div class="card" style="width:250px; height:250px;">
                            <div class="card-body d-flex flex-column">
                              <h4 class="card-title">Nota 2</h4>
                              <p class="card-text">Hace 3 días</p>
                              <div class="btn-group mt-auto">
                                <button type="button" class="btn btn-danger me-2">ELIMINAR</button>
                                <button type="button" class="btn btn-success">RECUPERAR</button>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-5">
                        <div class="card" style="width:250px; height:250px;">
                            <div class="card-body d-flex flex-column">
                              <h4 class="card-title">Nota 3</h4>
                              <p class="card-text">Hace 1 semana</p>
                              <div class="btn-group mt-auto">
                                <button type="button" class="btn btn-danger me-2">ELIMINAR</button>
                                <button type="button" class="btn btn-success">RECUPERAR</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 mb-5">
                        <div class="card" style="width:250px; height:250px;">
                            <div class="card-body d-flex flex-column">
                              <h4 class="card-title">Nota 4</h4>
                              <p class="card-text">Hace 1 mes</p>
                              <div class="btn-group mt-auto">
                                <button type="button" class="btn btn-danger me-2">ELIMINAR</button>
                                <button type="button" class="btn btn-success">RECUPERAR</button>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-5">
                        <div class="card" style="width:250px; height:250px;">
                            <div class="card-body d-flex flex-column">
                              <h4 class="card-title">Nota 5</h4>
                              <p class="card-text">Hace 1 mes</p>
                              <div class="btn-group mt-auto">
                                <button type="button" class="btn btn-danger me-2">ELIMINAR</button>
                                <button type="button" class="btn btn-success">RECUPERAR</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</body>
</html> 