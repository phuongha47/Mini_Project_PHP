<?php 

class AdminController {
    public function login(){
      require_once "views/client/pages/login.php";
    }
    public function logout(){  
      //xóa session
      session_start();
      unset($_SESSION["profie"]);   
      //xóa cookie   
      unset($_COOKIE['username']);
      setcookie("username", "", time() - 3600);
      //view
      require_once "views/client/pages/login.php";
  }

    public function loginAdmin(){ 
      //kiểm tra submit
      if (isset($_POST["submit"])){
         //so sánh password, username trong DB
         $result = AdminModel::login_Admin($_POST["username"], $_POST["password"]);
         if ($result == 1 ){  
            session_start();  
            $_SESSION['profie'] = $_POST;
            if(!empty($_POST["remember"])) {
               setcookie ("username",$_POST["username"],time()+ 3600);
               setcookie ("password",$_POST["password"],time()+ 3600);
               echo "Cookies Set Successfuly";
               } else {
                  setcookie("username","");
                  setcookie("password","");
                  echo "Cookies Not Set";
               }
         
            header('location: ?controller=home&action=index');
         }
         else {
            require_once "views/client/pages/login.php";
               }
         }        
      
      
   
    
 }
 
}

