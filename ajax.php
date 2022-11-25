<?php
	require_once('./controller/indexController.php');
	require_once('./controller/loginController.php');

	$indexController = new indexController();
	$loginController = new loginController();

	$action = $_REQUEST['action'];
	$controller = $_REQUEST['controller'];


	if($controller == "indexController") {
		$indexController->$action();
	}
	if($controller == "loginController") {
		return $loginController->login();
	}


?>