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

        public function where($where = []){
            $query = "SELECT * FROM $this->table WHERE ";
            $string = '';
            $i = 0;
            foreach($where as $column => $value){
                $i++;
                $string .= "$column=" . "'" . $value . "'";
                if($i !=count($where)){
                    $string .= " AND ";
                }
            }
            $query .= $value;
            $result = $this->conn->query($query);
            $data = array();
            while($row = $result->fetch_assoc()){
                $data = $row;
            }
            return $data;
        }
    }