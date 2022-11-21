<?php
    require_once('./Models/Connections.php');

    class category{
        public $conn;
        function __construct(){
            $connection = new connection();
            $this->conn = $connection->conn;
        }

        public function getAll(){
            $query = 'SELECT * FROM `categories`';

            $result = $this->conn->query($query);
            $categories = array();

            while($row = $result->fetch_assoc()){
                $categories[] = $row;
            }

            return $categories;
        }

        public function store(){
            $data = $_POST;
            $model = new category();
            $status = $model->insert($data);
            header('location: index.php?mod=category&act=index');
        }

        public function edit(){
            
        }

        public function update(){
            $model = new category();
            $status = $model->update($data);
            header('location: index.php?mod=category&act=index');
        }

        public function delete(){
            $model = new category();
            $status = $model->delete($data);
            header('location: index.php?mod=category&act=index');
        }
    }