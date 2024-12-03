<?php
/* Funciones de saneamiento */

//Sanear nombre
function sanitizeNombre($nombre) {
    // Eliminar espacios en blanco al principio y al final
    $nombre = trim($nombre);
    // Eliminar barras invertidas
    $nombre = stripslashes($nombre);
    // Convertir caracteres especiales a entidades HTML
    $nombre = htmlspecialchars($nombre); 
    return $nombre;
}
//Sanear apellidos
function sanitizeApellidos($apellidos) {
    // Eliminar espacios en blanco al principio y al final
    $apellidos = trim($apellidos);   
    // Eliminar barras invertidas
    $apellidos = stripslashes($apellidos);
    // Convertir caracteres especiales a entidades HTML
    $apellidos = htmlspecialchars($apellidos);   
    return $apellidos;
}
//Sanear email
function sanitizeCorreo($email) {
    // Eliminar espacios en blanco al principio y al final
    $email = trim($email);
    // Eliminar barras invertidas
    $email = stripslashes($email);
    // Convertir caracteres especiales a entidades HTML
    $email = htmlspecialchars($email);  
    return $email;
}
//Sanear contraseña
function sanitizePasswd($passwd) {
    // Eliminar espacios en blanco al principio y al final
    $passwd = trim($passwd);
    // Eliminar barras invertidas
    $passwd = stripslashes($passwd);
    // Convertir caracteres especiales a entidades HTML
    $passwd = htmlspecialchars($passwd);
    return $passwd;
}

//Sanear teléfono
function sanitizeTelefono($telefono) {
    // Eliminar espacios en blanco al principio y al final
    $telefono = trim($telefono);
    // Eliminar barras invertidas
    $telefono = stripslashes($telefono);
    // Convertir caracteres especiales a entidades HTML
    $telefono = htmlspecialchars($telefono);
    return $telefono;
}

//Sanear país
function sanitizePais($pais) {
    // Eliminar espacios en blanco al principio y al final
    $pais = trim($pais);
    // Eliminar barras invertidas
    $pais = stripslashes($pais);
    // Convertir caracteres especiales a entidades HTML
    $pais = htmlspecialchars($pais);
    return $pais;
}

//Sanear descripción
function sanitizeDescripcion($descripcion) {
    // Eliminar espacios en blanco al principio y al final
    $descripcion = trim($descripcion);
    // Eliminar barras invertidas
    $descripcion = stripslashes($descripcion);
    // Convertir caracteres especiales a entidades HTML
    $descripcion = htmlspecialchars($descripcion);
    return $descripcion;
}

/* Funciones de validación */

//Valida que las contraseñas sean iguales al repetirla
function validarPasswd($passwd, $repetir_passwd) {
    return $passwd === $repetir_passwd;
}

function validarEmail($email) {
    // Validar si el correo tiene un formato válido utilizando filter_var()
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // El correo es válido
    }
    return false; // El correo no tiene un formato válido
}

function validarPasswFormato($password) {
    // Verificar si la contraseña tiene al menos 8 caracteres, una letra mayúscula, un número y un carácter especial
    if (preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
        return true; // Contraseña válida
    }
    return false; // Contraseña inválida
}

function validarTelefono($telefono) {
    // Patrón para números de teléfono españoles (móviles o fijos) sin el prefijo internacional +34
    if (preg_match('/^[6789]\d{8}$/', $telefono)) {
        return true; // Número de teléfono válido
    }
    return false; // Número de teléfono inválido
}
?>
