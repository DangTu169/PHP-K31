<?php
     require_once("./models/User.php");
     require_once("./Controllers/BaseController.php");
    class UserController extends BaseController{
            public function index()
            {
                $model = new User();
                $users = $model->getAll();
                // echo"<pre>";
                //     print_r($categories);
                // echo"</pre>";
                require_once('./views/users/list.php');
            }

            public function create(){
                header('location: ./views/users/create.php');
            }
    
            public function store(){
                $data = $_POST;
                $model = new User();
                $status = $model->insert($data);
                header('location: index.php?mod=users&act=index');
                // header('location: index.php?mod=category&act=index');
            }

            public function edit(){
                $model = new User();
                $id = isset($_GET['id'])?$_GET['id']:0;
                $data['user'] = $model->find($id);
                // var_dump($id,$category);
                // die();
                $this->view('users/update.php',  $data);
            }
    
            public function update(){
                $data = $_POST;
                $model = new User();
                $status = $model->update($data);
                header('location: index.php?mod=user&act=index');
            }

            public function delete(){
                $model = new User();
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                // var_dump($id);
                // die();
                $status = $model->delete($id);
                if($status == true){
                    header('location: index.php?mod=User&act=index');
                }
                header('location: index.php?mod=User&act=index');
            }
    }