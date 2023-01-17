<?php
class DbService {
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host,$port, $username, $password, $database) {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Falha ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    public function closeConnection() {
        $this->connection = null;
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>