<?php
class Conexion {
    // Datos de configuración del servidor local (XAMPP)
    private $host = "localhost";
    private $db_name = "asocidemucre_db";
    private $username = "root";
    private $password = "";
    public $conn;

    // Función para la conexión
    public function conectar() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // echo "Conexión exitosa a la base de datos."; // descomentar esto para probar si funciona
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>