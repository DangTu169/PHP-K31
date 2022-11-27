<?php
    require_once('./Models/Connections.php');

    class Model{
        public $conn;
        function __construct(){
            $connection = new connection();
            $this->conn = $connection->conn;
        }

        public function getAll(){
            $query = "SELECT * FROM " . $this->table;

            $result = $this->conn->query($query);
            $items= array();
            // var_dump($result);
            // die();
            while($row = $result->fetch_assoc()){
                $items[] = $row;
            }

            return $items;
        }
    }