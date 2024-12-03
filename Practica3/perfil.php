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
            <!-- Contenedor de perfil -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <!-- Título de la página -->
                <h3 class="text-warning fw-bold my-4">TU PERFIL</h3>
                <!-- Cambiar icono de perfil -->
                <img class="perfil-icono img-fluid mx-auto d-inline-block" src="imagenes/perfil.png" alt="perfil">
                <h2 class="d-inline-block">¡Hola, Mateo!</h2>
                <h3 class="fw-bold my-5">Preferencias</h3>
                <!-- Formulario de preferencias -->
                <form action="BL/actualizar.php" method="post">
                    <div class="row">
                        <!-- Correo electrónico -->
                        <div class="col-md-6 mt-2 mb-2">
                            <label for="email" class="form-label fw-lighter">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['user_email']; ?>" disabled>
                        </div>
                        <!-- Contraseña -->
                        <div class="col-md-6 mt-2 mb-2">
                            <label for="ocultar" class="form-label fw-lighter float-end">
                            <a href="#" id="togglePassword1" class="text-secondary" style="text-decoration: none;">
                                <img src="imagenes/ocultar.png" alt="icono ocultar" class="pe-2">Mostrar
                            </a>
                            </label>
                            <label for="passwd" class="form-label fw-lighter">Contraseña:</label>
                            <input type="password" class="form-control" id="passwd" name="passwd">
                        </div>
                    </div>
                    <div class="row">
                        <!-- Nombre -->
                        <div class="col-md-3 mt-2 mb-2">
                            <label for="nombre" class="form-label fw-lighter">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_SESSION['user_name']; ?>" disabled>
                        </div>
                        <!-- Apellidos -->
                        <div class="col-md-3 mt-2 mb-2">
                            <label for="apellidos" class="form-label fw-lighter">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $_SESSION['user_lastname']; ?>" disabled>
                        </div>
                        <!-- Repetir contraseña -->
                        <div class="col-md-6 mt-2 mb-2">
                            <label for="ocultar" class="form-label fw-lighter float-end">
                            <a href="#" id="togglePassword2" class="text-secondary" style="text-decoration: none;">
                                <img src="imagenes/ocultar.png" alt="icono ocultar" class="pe-2">Mostrar
                            </a>
                            </label>
                            <label for="repetir_passwd" class="form-label fw-lighter">Repetir contraseña:</label>
                            <input type="password" class="form-control" id="repetir_passwd" name="repetir_passwd">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2 mb-2">
                            <!-- Teléfono -->
                            <label for="telefono" class="form-label fw-lighter">Teléfono (opcional)</label>
                            <input type="tel" class="form-control mb-4" id="telefono" name="telefono" value="<?php if (isset($_SESSION['user_phone']) && !empty($_SESSION['user_phone'])) { echo $_SESSION['user_phone']; } ?>">
                            <!-- País -->
                            <label for="direccion" class="form-label fw-lighter">Direcci&oacute;n (opcional)</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php if (isset($_SESSION['user_direction']) && !empty($_SESSION['user_direction'])) { echo $_SESSION['user_direction']; } ?>">
                        </div>
                        <!-- Descripción -->
                        <div class="col-md-6 mt-2 mb-2">
                            <label for="descripcion" class="form-label fw-lighter">Descripci&oacute;n (opcional)</label>
                            <textarea type="text" class="form-control mb-3" id="descripcion" name="descripcion" rows="5" value="<?php if (isset($_SESSION['user_descripction']) && !empty($_SESSION['user_descripction'])) { echo $_SESSION['user_descripction']; } ?>"></textarea>
                        </div>
                    </div>
                    <!-- Botón de actualizar -->  
                    <button type="submit" class="btn btn-primary rounded-pill px-5 mx-2 mb-5 float-start">Actualizar perfil</button>
                </form>

                <!-- Enlaze a Borrar cuenta -->
                    <a href="pre_borrar.php" class="btn btn-danger rounded-pill px-5 mb-3 mx-2 float-end">Borrar cuenta</a>
                <!-- Botón de cerrar sesión -->
                <form action="BL/logout.php" method="post">
                        <button type="submit" class="btn btn-warning rounded-pill px-5 mb-3 mx-2 float-end">Cerrar sesión</button>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Funcionalidad ocultar contraseña -->
    <script src="helpers/show_passwd.js"></script>
</body>
</html> 