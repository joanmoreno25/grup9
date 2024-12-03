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
<!-- Recuadro del formulario -->
<body class="fondo">
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="formulario bg-white rounded-3 shadow p-5 bg-white" style="width: 35%;">
        <h2 class="text-center">Borrar cuenta</h2><br>
        <p class='text-center'>¿Estás seguro de que deseas eliminar tu cuenta? Esta acción es irreversible y todos tus datos asociados serán permanentemente eliminados.</p>
        <!-- Botones --> 
        <div class="row">
            <div class="col-md-6 mt-2 mb-2">
                <!-- Botón de cancelar --> 
                <a href="perfil.php" class="btn btn-warning rounded-pill mx-auto d-block">Cancelar</a>  
            </div>
            <div class="col-md-6 mt-2 mb-2">
                <!-- Botón de eliminar cuenta definitivamente --> 
                <form action="BL/borrar.php" method="post">
                    <button type="submit" class="btn btn-danger rounded-pill mx-auto d-block w-100">Borrar cuenta</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>