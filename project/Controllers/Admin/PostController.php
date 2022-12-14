<?php
    require_once("./models/Post.php");
    require_once("./Controllers/BaseController.php");
    class PostController extends BaseController{
        public function index(){
           //cần select from post table
           //trả dữ liệu ra vỉew
           $model = new Post();
           $posts = $model->getAll();
           $data['posts'] = $posts;
           $this->view('Admin/Posts/index.php', $data);
        }

        public function create(){
            $this->view('Admin/Posts/create.php');
        }

        public function store(){
            $data = $_POST;
            $model = new Post();
            $status = $model->insert($data);
            header('location: index.php?admin=admin&mod=post&act=index');
            // header('location: index.php?mod=category&act=index');
        }

        public function edit(){
            $model = new Post();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $data['post'] = $model->find($id);
            // var_dump($id,$category);
            // die();
            $this->view('Admin/Posts/edit.php',  $data);
        }

        public function update(){
            $data = $_POST;
            $model = new Post();
            $status = $model->update($data);
            // var_dump($status);
            // die();
            if($status == false){
                print_r('Update lỗi');
                die();
            } 
            header('location: index.php?admin=admin&mod=post&act=index');
        }
        
        public function delete(){
            $model = new Post();
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            // var_dump($id);
            // die();
            $status = $model->delete($id);
            if($status == true){
                header('location: index.php?admin=admin&mod=post&act=index');
            }
            header('location: index.php?admin=admin&mod=post&act=index');
        }

        public function show(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $category = $model->show($id);
            
            require_once "./Views/categories/show.php";  
        }
    }