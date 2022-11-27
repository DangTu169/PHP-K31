<?php
    class BaseController{
        public function redirect($url){
            header("location: ". $url);
        }

        public function view($path, $data=[]){
            extract($data);
            require_once("./Views/". $path);
        }
    }