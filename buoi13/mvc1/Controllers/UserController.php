<?php
     require_once("./models/User.php");
    class UserController{
            public function index()
            {
                $model = new User();
                $users = $model->getAll();
                // echo"<pre>";
                //     print_r($categories);
                // echo"</pre>";
                require_once('./views/users/list.php');
            }
    }