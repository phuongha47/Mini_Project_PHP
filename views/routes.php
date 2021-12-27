<?php 
// require_once 'controllers/'.$controller.'Controller.php';
// require_once 'models/MasterModel.php';
	// require_once "views/post/post.php";
    $ControllerName ="${controller}Controller";
    require_once "controllers/$ControllerName.php";
	
switch ($controller){
    case 'home':
        $controllerObject= new HomeController();
        $controllerObject->index();
        break; 
    case 'post':
        $controllerObject = new PostController();
        require_once 'models/PostModel.php';
        $controllerObject->{$action}();
        break;
    case 'Admin':
        $controllerObject = new AdminController();
        require_once 'models/AdminModel.php';
        $controllerObject->{$action}();
        break;  
    default:
        $controllerObject= new HomeController();
        $controllerObject->index();
        break;

   
}
