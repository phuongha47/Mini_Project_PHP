<?php

class HomeController{

    public static function index(){ 
        if (isset($_COOKIE['username'])){
            //kiểm tra có sẵn cookie không, để auto đăng nhập
            session_start();
            $_SESSION['profie'] = $_COOKIE['username'];
        }
       
           require "views/post/index.php";
        }    
    
 
}