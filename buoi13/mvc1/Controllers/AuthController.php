<?php
    require_once "./Controllers/BaseController.php";
    require_once "./Controllers/UserController.php";
    require_once "./Models/User.php";
    class AuthController extends BaseController {
        public function login(){
            $this->view("view2/auth/login.php",[]);
        }
        public function handleLogin(){
            // var_dump($_POST);
            //     die();
            $user = new User();
            if($user->checkLogin($_POST['email'], $_POST['password'])){
                $this->redirect("index.php?mod=category&act=index");
                
            } else{
                $this->redirect("index.php?mod=auth&act=login");
            }
        }
        public function logout(){
            unset($_SESSION['auth']);
            $this->redirect('index.php?mod=auth&act=login');
        }
    }
?>