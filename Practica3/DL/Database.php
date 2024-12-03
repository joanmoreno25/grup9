<?php
//Incluir archivo de acceso a la BD
require_once ("config.php");

//Clase que abre la conexión y gestiona la BD
class Database{

    //Propiedades
    private $conn;

    //Constructor
    public function __construct () {
        $this->conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    }

    // Método para hacer el alta de un registro
    public function insertUser($nombre, $apellidos, $email, $passwd) {
        $sql = "INSERT INTO usuario (nombre, apellidos, email, passwd) VALUES ('$nombre', '$apellidos', '$email', '$passwd')";
        return ($this->conn->query($sql));
    }

    // Mètodo para validar el correo en el inicio de sesión
    public function getLogged($email, $passwd) {
        // Consulta para obtener la contraseña asociada al email
        $sql = "SELECT passwd FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);
    
        // Si no se encuentra el email
        if ($result->num_rows === 0) {
            return false; 
        }
    
        // Recuperar la contraseña desde la base de datos
        $user = $result->fetch_assoc();
        $storedPasswd = $user['passwd'];
    
        // Comparar la contraseña proporcionada con la almacenada
        if (password_verify($passwd, $storedPasswd)) {
            return true; // Inicio de sesión exitoso
        } else {
            return false; // Contraseña incorrecta
        }
    }

    public function deleteUser($email, $passwd) {
        // Consultar la contraseña cifrada desde la base de datos
        $sql = "SELECT passwd FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);
    
        // Si no se encuentra el email
        if ($result->num_rows === 0) {
            return false; // No existe el usuario
        }
    
        // Recuperar la contraseña almacenada
        $user = $result->fetch_assoc();
        $storedPasswd = $user['passwd'];
    
        // Verificar la contraseña proporcionada
        if (password_verify($passwd, $storedPasswd)) {
            // Contraseña válida, proceder a eliminar el usuario
            $sqlDelete = "DELETE FROM usuario WHERE email = '$email'";
            return $this->conn->query($sqlDelete);
        } else {
            // Contraseña incorrecta
            return false;
        }
    }

    // Método para obtener el nombre de un usuario
    public function getUserName($email, $passwd) {
        // Consulta para obtener la contraseña cifrada y el nombre del usuario
        $sql = "SELECT nombre, passwd FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);
    
        // Verificar si se encontró el email
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $storedPasswd = $user['passwd'];
    
            // Verificar la contraseña
            if (password_verify($passwd, $storedPasswd)) {
                return $user['nombre']; // Retornar el nombre si la contraseña es válida
            }
        }
    
        return null; // Retornar null si no se encuentra el usuario o la contraseña es incorrecta
    }
    

    // Método para obtener los apellidos de un usuario
    public function getUserLastName($email, $passwd) {
        // Consulta para obtener la contraseña cifrada y los apellidos del usuario
        $sql = "SELECT apellidos, passwd FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);
    
        // Verificar si se encontró el email
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $storedPasswd = $user['passwd'];
    
            // Verificar la contraseña
            if (password_verify($passwd, $storedPasswd)) {
                return $user['apellidos']; // Retornar los apellidos si la contraseña es válida
            }
        }
    
        return null; // Retornar null si no se encuentra el usuario o la contraseña es incorrecta
    }

    // Método para obtener el teléfono del usuario
    public function getUserPhone($email, $passwd) {
        // Consulta para obtener la contraseña cifrada y el teléfono del usuario
        $sql = "SELECT telefono, passwd FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);
    
        // Verificar si se encontró el email
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $storedPasswd = $user['passwd'];
    
            // Verificar la contraseña
            if (password_verify($passwd, $storedPasswd)) {
                return $user['telefono']; // Retornar el teléfono si la contraseña es válida
            }
        }
    
        return null; // Retornar null si no se encuentra el usuario o la contraseña es incorrecta
    }

    // Método para obtener la dirección del usuario
    public function getUserAddress($email, $passwd) {
        // Consulta para obtener la contraseña cifrada y la dirección del usuario
        $sql = "SELECT direccion, passwd FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);
    
        // Verificar si se encontró el email
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $storedPasswd = $user['passwd'];
    
            // Verificar la contraseña
            if (password_verify($passwd, $storedPasswd)) {
                return $user['direccion']; // Retornar la dirección si la contraseña es válida
            }
        }
    
        return null; // Retornar null si no se encuentra el usuario o la contraseña es incorrecta
    }

    // Método para obtener la descripción del usuario
    public function getUserDescription($email, $passwd) {
        // Consulta para obtener la contraseña cifrada y la descripción del usuario
        $sql = "SELECT descripcion, passwd FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);
    
        // Verificar si se encontró el email
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $storedPasswd = $user['passwd'];
    
            // Verificar la contraseña
            if (password_verify($passwd, $storedPasswd)) {
                return $user['descripcion']; // Retornar la descripción si la contraseña es válida
            }
        }
    
        return null; // Retornar null si no se encuentra el usuario o la contraseña es incorrecta
    }

    // Método para verificar si un email existe en la base de datos
    public function isEmailAvailable($email) {
        // Consulta para verificar si el email existe
        $sql = "SELECT email FROM usuario WHERE email = '$email'";
        $result = $this->conn->query($sql);

        // Verificar si el correo fue encontrado
        if ($result->num_rows > 0) {
            return false; // El correo ya existe
        } else {
            return true; // El correo no existe, está disponible
        }
    }

    // Método para actualizar los datos de un usuario
    public function updateUserDetails($email, $telefono, $direccion, $passwd, $descripcion) {
        // Actualizar directamente todos los campos, incluida la contraseña cifrada
        $sqlUpdate = "UPDATE usuario 
                      SET telefono = '$telefono', 
                          direccion = '$direccion', 
                          descripcion = '$descripcion', 
                          passwd = '$passwd' 
                      WHERE email = '$email'";
        return $this->conn->query($sqlUpdate);
    }
}
?> 
