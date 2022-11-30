<?php
    require_once("./models/Category.php");
    require_once("./Controllers/BaseController.php");
    class CategoryController extends BaseController{
        public function index(){
            $model = new Category();
            $categories = $model->getAll();
            // echo"<pre>";
            //     print_r($categories);
            // echo"</pre>";
            // require_once('./views/categories/list.php');
            $data['categories'] = $categories;
            // var_dump($data);
            // die();
            $this->view('categories/list.php', $data);
        }

        public function create(){
            $this->view('categories/create.php');
        }

        public function store(){
            $data = $_POST;
            $model = new Category();
            $status = $model->insert($data);
            header('location: index.php?mod=category&act=index');
            // header('location: index.php?mod=category&act=index');
        }

        public function edit(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $data['category'] = $model->find($id);
            // var_dump($id,$category);
            // die();
            $this->view('categories/update.php',  $data);
        }

        public function update(){
            $data = $_POST;
            $model = new Category();
            $status = $model->update($data);
            header('location: index.php?mod=category&act=index');
        }
        
        public function delete(){
            $model = new Category();
            $id = isset($_GET['id']) ? $_GET['id'] : 0;
            // var_dump($id);
            // die();
            $status = $model->delete($id);
            if($status == true){
                header('location: index.php?mod=category&act=index');
            }
            header('location: index.php?mod=category&act=index');
        }

        public function show(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $category = $model->show($id);
            
            require_once "./Views/categories/show.php";  
        }
    }