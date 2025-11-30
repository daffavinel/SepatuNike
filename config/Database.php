<?php


if (!class_exists('Database')) {

class Database {

    private $connection;

    public function getConnection() {
        $this->connection = null;

        try {
            // Koneksi ke database
            $this->connection = new mysqli("localhost", "root", "", "db_spatu");

            // Cek error
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }

           
            $this->connection->set_charset("utf8");

            return $this->connection;

        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

} 
