<?php
     require_once('./Models/Connections.php');
     require_once('./Models/Model.php');
     class User extends Model{
        public $table = 'users';
     }