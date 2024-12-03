<?php
// Iniciar la sesión
session_start();

// Incluir los archivos necesarios
require_once('../DL/Database.php');
require_once('../helpers/valida.php');

class Usuari {

    // Método para establecer variables de sesión
    public function establecerVariablesSesion($nombre, $apellidos, $email, $passwd) {
        $_SESSION['user_logged'] = 1;
        $_SESSION['user_name'] = $nombre;
        $_SESSION['user_lastname'] = $apellidos;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_passwd'] = $passwd;
    }

    // Método para establecer variables de sesión adicionales
    public function establecerVariablesSesion2($telefono, $direccion, $passwd, $descripcion) {
        $_SESSION['user_phone'] = $telefono;
        $_SESSION['user_direction'] = $direccion;
        $_SESSION['user_passwd'] = $passwd;
        $_SESSION['user_descripction'] = $descripcion;
    }

    // Método para obtener el nombre del usuario
    public function nombreUsuario($email, $passwd) {
        $db = new Database ();
        return $db->getUserName($email, $passwd);
    }

    // Método para obtener el apellido del usuario
    public function apellidoUsuario($email, $passwd) {
        $db = new Database ();
        return $db->getUserLastName($email, $passwd);
    }

    // Método para obtener el teléfono del usuario
    public function telefonoUsuario($email, $passwd) {
        $db = new Database();
        return $db->getUserPhone($email, $passwd);
    }

    // Método para obtener la dirección del usuario
    public function direccionUsuario($email, $passwd) {
        $db = new Database();
        return $db->getUserAddress($email, $passwd);
    }

    // Método para obtener la descripción del usuario
    public function descripcionUsuario($email, $passwd) {
        $db = new Database();
        return $db->getUserDescription($email, $passwd);
    }
    
    // Método para verificar si el email está disponible
    public function emailDisponible($email) {
        $db = new Database();
    
        // Verificar si el correo está disponible y devolver un booleano
        return $db->isEmailAvailable($email);
    }

    // Método para registrar usuarios
    public function altaUsuario($nombre, $apellidos, $email, $passwd) {
        $error = 0;
    
        // Saneamos las variables de registro
        $nombre = sanitizeNombre($nombre);
        $apellidos = sanitizeApellidos($apellidos);
        $email = sanitizeCorreo($email);
        $passwd = sanitizePasswd($passwd);
    
        // Validar si el email está disponible
        if (!$this->emailDisponible($email)) {
            // Correo ya en uso
            $error = $_SESSION["errorNumber"] = 10;
        }
    
        // Validar el formato del correo
        if (validarEmail($email)) {
            // Validar que la contraseña sea robusta
            if (validarPasswFormato($passwd)) {
                // Cifrar la contraseña
                $hashedPasswd = password_hash($passwd, PASSWORD_DEFAULT);
    
                // Instanciar la clase Database
                $db = new Database();
              
                // Llamamos al método insertUser para hacer el alta en la BBBDD
                if (!$db->insertUser($nombre, $apellidos, $email, $hashedPasswd)) {
                    // En caso de problema de validación
                    $error = $_SESSION["errorNumber"] = 2;
                }
            } else {
                // En caso de problema de contraseña débil
                $error = $_SESSION["errorNumber"] = 3;
            }
        } else {
            // En caso de problema de formato en el email
            $error = $_SESSION["errorNumber"] = 4;
        }
    
        // Devolvemos el tipo de error que ha sucedido
        return $error;
    }
    

    // Método para validar usuarios
    public function validarUsuario($email, $passwd) {
        $error = 0;

        // Saneamos las variables de login
        $email = sanitizeCorreo($email);
        $passwd = sanitizePasswd($passwd);

        // Instanciar la clase Database
        $db = new Database ();

        // Llamamos al método getLogged para iniciar sesión
        if ( !$db->getLogged($email, $passwd) ) {
            //Problema de validación de correo o contraseña
            $error = $_SESSION["errorNumber"] = 5;
        }

        // Devolvemos el tipo de error que ha sucedido
        return $error;
    }

    // Método para eliminar usuarios
    public function eliminarUsuario() {
        $error = 0;
    
        // Instanciar la clase Database
        $db = new Database();
    
        // Recuperar el correo y contraseña de sesión
        $email = $_SESSION['user_email'];
        $passwd = $_SESSION['user_passwd'];
    
        // Validar si la contraseña es correcta antes de eliminar
        if (!$db->deleteUser($email, $passwd)) {
            // Problema de validación o eliminación
            $error = $_SESSION["errorNumber"] = 7;
        }
    
        // Devolvemos el tipo de error que ha sucedido
        return $error;
    }

    // Método para actualizar el perfil
    public function actualizarPerfil($telefono, $direccion, $passwd, $descripcion) {
        $error = 0;
    
        // Saneamos las variables de registro
        $telefono = sanitizeTelefono($telefono);
        $direccion = sanitizePais($direccion);
        $passwd = sanitizePasswd($passwd);
        $descripcion = sanitizeDescripcion($descripcion);
        
        // Validar el formato del teléfono
        if (validarTelefono($telefono) || empty($telefono)) {
            // Validar que la contraseña sea robusta
            if (validarPasswFormato($passwd)) {
                // Cifrar la nueva contraseña
                $hashedPasswd = password_hash($passwd, PASSWORD_DEFAULT);
    
                // Instanciar la clase Database
                $db = new Database();
    
                // Llamamos al método updateUserDetails para actualizar el perfil
                if (!$db->updateUserDetails($_SESSION['user_email'], $telefono, $direccion, $hashedPasswd, $descripcion)) {
                    // En caso de problema de validación
                    $error = $_SESSION["errorNumber"] = 8;
                }
            } else {
                // En caso de problema de contraseña débil
                $error = $_SESSION["errorNumber"] = 3;
            }
        } else {
            // En caso de problema de formato en el teléfono
            $error = $_SESSION["errorNumber"] = 9;
        }
    
        // Devolvemos el tipo de error que ha sucedido
        return $error;
    }
}
?>
