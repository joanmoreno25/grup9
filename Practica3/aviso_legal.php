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
            <!-- Información completa sobre aviso legal -->
            <div class="col-xl-10 col-md-9 col-sm-8 p-5">
                <h3 class="text-warning fw-bold mt-4">AVISO LEGAL</h3>
                <p class="text-dark">Última actualización: 17/10/2024</p>
                <div class="small">
                    <p class="text-secondary">Este Aviso Legal regula el acceso, navegación y uso de la página web TomaNota, así como las responsabilidades derivadas de la utilización de sus contenidos, productos y servicios.</p>
                    <!-- Datos del titular del Sitio Web -->
                    <p class="text-secondary m-0">1. Datos del titular del Sitio Web</p>
                    <p class="text-secondary m-0">Titular: Joan Moreno Martin</p>
                    <p class="text-secondary m-0">Domicilio: Plaça Cívica, 08193 Bellaterra, Barcelona</p>
                    <p class="text-secondary m-0">Correo electrónico: info.tomanota@gmail.com</p>
                    <p class="text-secondary m-0">Teléfono: 638982336</p>
                    <p class="text-secondary">Número de identificación fiscal (NIF/CIF): 38421670H</p>
                    <!-- Condiciones de uso -->
                    <p class="text-secondary m-0">2. Condiciones de uso</p>
                    <p class="text-secondary m-0">Al acceder y utilizar el Sitio Web, aceptas estar sujeto a las siguientes condiciones y normativas, que pueden ser actualizadas periódicamente:</p>
                    <ul class="text-secondary">
                        <li>Uso adecuado del sitio: Te comprometes a utilizar el Sitio Web y sus contenidos de manera lícita, de acuerdo con las leyes vigentes, el presente Aviso Legal y respetando los derechos de terceros. Queda prohibido cualquier uso que pueda dañar, inutilizar, sobrecargar o deteriorar la plataforma, o interferir en su correcto funcionamiento.</li>
                        <li>Contenidos del usuario: Almacenamos y gestionamos la información que introduces en la plataforma, incluidas las notas personales que decidas guardar. Es tu responsabilidad garantizar que el contenido que subas no infrinja derechos de terceros ni sea ilegal.</li>
                    </ul>
                    <!-- Propiedad intelectual e industrial -->
                    <p class="text-secondary m-0">3. Propiedad intelectual e industrial</p>
                    <p class="text-secondary m-0">Todos los derechos de propiedad intelectual e industrial sobre los contenidos, diseño gráfico, código fuente, logos, textos, imágenes y otros elementos del Sitio Web son titularidad de TomaNota o de sus respectivos licenciantes, salvo que se indique lo contrario. Queda prohibida la reproducción, distribución, comunicación pública, transformación o cualquier otra forma de explotación sin el consentimiento previo por escrito del titular de los derechos.</p>
                    <p class="text-secondary">El uso no autorizado de los contenidos del Sitio Web o cualquier vulneración de los derechos de propiedad intelectual e industrial podrá dar lugar a las responsabilidades legalmente establecidas.</p>
                    <!-- Responsabilidad -->
                    <p class="text-secondary m-0">4. Responsabilidad</p>
                    <p class="text-secondary m-0">a) Disponibilidad del servicio</p>
                    <p class="text-secondary">TomaNota se esfuerza por mantener el acceso y correcto funcionamiento del Sitio Web en todo momento, pero no garantiza que el servicio sea ininterrumpido o libre de errores. Nos reservamos el derecho de suspender temporalmente el acceso al Sitio Web sin previo aviso por razones de mantenimiento, actualización o cualquier otra causa técnica.</p>
                    <p class="text-secondary m-0">b) Enlaces a terceros</p>
                    <p class="text-secondary">El Sitio Web puede contener enlaces a páginas web de terceros. TomaNota no se responsabiliza por los contenidos o prácticas de privacidad de estos sitios, por lo que te recomendamos leer los términos y políticas de privacidad correspondientes antes de interactuar con ellos.</p>
                    <p class="text-secondary m-0">c) Contenido de los usuarios</p>
                    <p class="text-secondary">Los usuarios son responsables del contenido que suben o almacenan en TomaNota. Aunque hacemos esfuerzos razonables para supervisar el contenido que se sube a nuestra plataforma, no nos hacemos responsables por las infracciones de derechos de propiedad intelectual, violaciones de privacidad o cualquier otro tipo de daño causado por el contenido subido por los usuarios.</p>
                    <!-- Protección de datos personales -->
                    <p class="text-secondary m-0">5. Protección de datos personales</p>
                    <p class="text-secondary">La protección de tus datos personales es muy importante para nosotros. Los datos que recopilemos a través del Sitio Web se tratarán conforme a lo establecido en nuestra Política de Privacidad, donde encontrarás más detalles sobre cómo gestionamos tu información personal.</p>
                    <!-- Modificaciones -->
                    <p class="text-secondary m-0">6. Modificaciones</p>
                    <p class="text-secondary">Nos reservamos el derecho de modificar en cualquier momento y sin previo aviso las condiciones de este Aviso Legal, así como los contenidos del Sitio Web. Las modificaciones entrarán en vigor en el momento en que sean publicadas en el Sitio Web.</p>
                    <!-- Legislación aplicable y jurisdicción -->
                    <p class="text-secondary m-0">7. Legislación aplicable y jurisdicción</p>
                    <p class="text-secondary">Este Aviso Legal se regirá e interpretará de acuerdo con las leyes de [país de residencia o sede de la empresa]. Cualquier disputa que surja en relación con el acceso o uso del Sitio Web se someterá a la jurisdicción de los juzgados y tribunales de Barcelona.</p>
                </div>                              
            </div>
        </div>
    </div>
</body>
</html> 