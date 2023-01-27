<?php
class Vehicle {
    // DB stuff
    private $database_connection;
    private $table_name = 'vehicles';

    // Post Properties
    public $vehicle_id;


    public $vehicle_owner;
    public $description;
    public $created_at;

    // Constructor with DB
    public function __construct($db) {
        $this->database_connection = $db;

    }

    // Get Posts
    public function getVehicles() {
        // Create query
        $query = 'SELECT vehicle_id, vehicle_owner, description,created_at
                                FROM ' . $this->table_name . ' 
                                ORDER BY
                                  created_at DESC';

        // Prepare statement
        $stmt = $this->database_connection->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }
    // Get Single Post


}