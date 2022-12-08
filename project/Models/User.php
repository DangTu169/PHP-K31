<?php
     require_once('./Models/Connections.php');
     require_once('./Models/Model.php');
     class User extends Model{
         public $table = 'users';

         public function checkLogin($email, $password){
            // var_dump($email);
            // die();
            $users = $this->where(["email" => $email, "password" => $password]);
            // if(!isset($users[0])){
           
            //     return false;
            // }
            // $users = $users[0];
            
            if(count($users) > 0){
                $_SESSION['auth'] = [
                    'id' => $users['id'],
                    'name' => $users['name']
                ];
                return true;
            }else{
                return false;
            }
        }
        

         public function insert($data){
            $query = 'INSERT INTO `users`( name1, email) VALUES ("' .$data['name1'] . '","' . $data['email'] .'")';

            return $this->conn->query($query);
         }

         public function find($id){
            $query = 'SELECT * FROM `users` WHERE id = '.$id;
            $result = $this->conn->query($query);
            return $result->fetch_assoc();
        }

        public function update($data){
            $query = "UPDATE users SET name1='".$data['name1'] ."',email='".$data['email'] ."' WHERE id = ".$data['id'];

            return $this->conn->query($query);
        }

        public function delete($id){
         $query = 'DELETE FROM `users` WHERE id = ' . $id;

         return $this->conn->query($query);
     }
     }