<?php
class PostController 
{
    public function __construct()
    {
        
        require_once "models/PostModel.php";
    }

    public static function view(){
        $list= PostModel::getAll();
        return require('views/post/post_view.php');
    }
    
    public static function post_admin(){
        $list= PostModel::getAll();
        return require('views/post/post.php');
    }
   
    public static function viewById(){
        
        $post =PostModel::getPost($_GET['id']);
        require 'views/post/post_detail_view.php';
    }
       
    public static function viewByIdAdmin(){
        $post =PostModel::getPost($_GET['id']);
        require 'views/post/post_detail.php';
    }
           

    public function delete()
    {
        if (isset($_GET['id'])){
            PostModel::delete_by_id($_GET['id']);
            header('location: ?controller=post&action=post_admin');
           
        } else {
            header('location:.');
        }
    }

    public function add(){
        require 'views/post/add.php';
    }
    //update post
    public function store(){
        if (isset($_POST['submit'])){
            $title = $_POST['title'];
            $post = $_POST['post'];
            //SQL injection
            $title = strip_tags($title);
            $title = addslashes($title);
            $post = strip_tags($post);
            $post = addslashes($post);
            //ràng buộc title
            if (empty($title)||strlen($title)>100){
                echo "title không được rỗng và lớn hơn 100";
            } 
            //ràng buộc body not empty
            else if (empty($post)){
                echo "body không được rỗng ";
            }
                else {
                    PostModel::addPost($title, $post);
                    header('location: ?controller=post&action=post_admin');
            }
            
        } else {
            header('location:.');
           
        }
    }

    public function update(){
        $id=$_GET['id'];
        $post =PostModel::getPost($_GET['id']);
        require 'views/post/update.php';
    }

    public function edit(){
        
        require 'views/post/update.php';
        if (isset($_POST['submit'])){
            $title = $_POST['title'];
            $post = $_POST['post'];
            
            $title = strip_tags($title);
            $title = addslashes($title);
            $post = strip_tags($post);
            $post = addslashes($post);
            PostModel::updatePost( $_GET["id"],$title, $post);
            header('location: ?controller=post&action=post_admin');
        } else {
            header('location:.');
            ;}
    }
        
}
    
