<?php
    require_once('./Models/Connections.php');
    class Post{
        public $conn;
        function __construct(){
            $connection = new Connection();
            $this->conn = $connection->conn;
        }

        public function getAll(){
            $query = 'SELECT * FROM `posts`';

            $result = $this->conn->query($query);
            $posts = [];

            while($row = $result->fetch_assoc()){
                $posts[] = $row;
            }

            return $posts;
        }

        public function insert($data){
            //$query = 'INSERT INTO `categories`(`category_name`,`category_description`) VALUES ("' .$data['category_name'] . '","' . $data['category_description'] .'")';
            $query = 'INSERT INTO `posts`( `title`, `description`, `thumbnail`, `content`, `slug`)
             VALUES ("' .$data['title'] . '","' . $data['description'] .'","' .$data['thumbnail'] . '","' .$data['content'] . '","' .$data['slug'] . '")';
            return $this->conn->query($query);
        }

        public function find($id){
            $query = 'SELECT * FROM `posts` WHERE id = '.$id;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        public function update($data){
            // $query = "UPDATE `posts` 
            // SET `title`='" .$data['title'] ."',`description`='" .$data['description'] ."',`thumbnail`='" .$data['thumbnail'] ."',`content`='".$data['content'] ."',`slug`='".$data['slug'] ."' WHERE id = ".$data['id'];
            $query = "UPDATE `posts` SET `title`='".$data['title'] ."',`description`='".$data['description'] ."',`thumbnail`='".$data['thumbnail'] ."',`content`='".$data['content'] ."',`slug`='".$data['slug'] ."' WHERE id = ".$data['id'];
            return $this->conn->query($query);
        }

        public function delete($id){
            $query = 'DELETE FROM `posts` WHERE id = ' . $id;

            return $this->conn->query($query);
        }

        // public function show($id){
        //     $query = 'SELECT * FROM `categories` WHERE id = '.$id;
        //     $result = $this->conn->query($query);
        //     return $result->fetch_assoc();
        // }
    }
