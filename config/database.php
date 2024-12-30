<?php

class Database 
{
    private $host = 'localhost'; 
    private $db_name = 'database_name'; 
    private $username = 'username'; 
    private $password = 'password'; 
    private $conn; 

    public function connect() {

        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Erro de Conexão: ' . $e->getMessage();
        }

        return $this->conn; 
    }
}
