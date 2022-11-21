<?php
    require_once("./models/Category.php");
    class CategoryController{
        public function index(){
            $model = new category();
            $categories = $model->getAll();
            // echo"<pre>";
            //     print_r($categories);
            // echo"</pre>";
            require_once('./views/categories/list.php');
        }
        public function create(){
            require_once('./views/categories/create.php');
        }
        public function store(){
            $data = $_POST;
            $model = new category();
            $status = $model -> insert($data);
            header('location: index.php?mod=category&act=index');
        }
    }