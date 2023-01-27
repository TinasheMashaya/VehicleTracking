<?php
class DatabaseHelper {
    // DB Params
    private $host_name = 'localhost';
    private $database_name = 'vehicleDB';
    private $username = 'tinashe';
    private $password = '1234';
    private $database_connection;

    // DB Connect
    public function connect() {
        $this->database_connection = null;

        try {
            $this->database_connection = new PDO('mysql:host=' . $this->host_name . ';dbname=' . $this->database_name, $this->username, $this->password);
            $this->database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Failed To Connect: ' . $e->getMessage();
        }

        return $this->database_connection;
    }
}