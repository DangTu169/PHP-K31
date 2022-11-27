<?php
    require_once('./Models/Connections.php');

    class category{
        public $conn;
        function __construct(){
            $connection = new Connection();
            $this->conn = $connection->conn;
        }

        public function getAll(){
            $query = 'SELECT * FROM `categories`';

            $result = $this->conn->query($query);
            $categories = [];

            while($row = $result->fetch_assoc()){
                $categories[] = $row;
            }

            return $categories;
        }

        public function insert($data){
            $query = 'INSERT INTO `categories`(`category_name`,`category_description`) VALUES ("' .$data['category_name'] . '","' . $data['category_description'] .'")';

            return $this->conn->query($query);
        }

        public function find($id){
            $query = 'SELECT * FROM `categories` WHERE id = '.$id;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        public function update($data){
            $query = "UPDATE `categories` SET `category_name`='".$data['category_name'] ."',`category_description`='".$data['category_description'] ."' WHERE id = ".$data['id'];

            return $this->conn->query($query);
        }

        public function delete($id){
            $query = 'DELETE FROM `categories` WHERE id = ' . $id;

            return $this->conn->query($query);
        }
    }