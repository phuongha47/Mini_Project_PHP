<?php
	require 'Core/Database.php';
	require_once "models/MasterModel.php";

	if (isset($_GET['controller'], $_GET['action'])){
		$controller = $_GET['controller'];
		$action= $_GET['action'];}
		else {
			$controller ='Home';
			$action='index';
		}
	
	require_once "views/routes.php";
	
	
?>


