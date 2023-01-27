<?php
class DatabaseHelper {
    // DB Params
    private $host_name = 'vehicledb-ueanvc:3306';
    private $database_name = 'vehiclesDB';
    private $username = 'tinashe';
    private $password = 'tinashe123';
    private $database_connection;

    // DB Connect
    public function connect() {
        $this->database_connection = null;

        try {
            $this->database_connection = new PDO('mysql:host=' . $this->host_name . ';dbname=' . $this->database_name.';port=3306', $this->username, $this->password);
            $this->database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Failed To Connect: ' . $e->getMessage();
        }

        return $this->database_connection;
    }
}