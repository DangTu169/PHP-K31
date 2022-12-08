<?php
    require_once "./Controllers/BaseController.php";
   
    class AdminController extends BaseController {
        public function __contruct(){
            if (!$this_->checkLogin()){
                $this->redirect('index.php?mod=auth$act=login');
            }
        }
        protected function checkLogin(){
            if(isset($SESSION['auth'])){
                return true;
            }else{
                return false;
            }
        }
    }

?>