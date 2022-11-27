<?php
	require_once __DIR__.'/../components/head-pages.php'; 
	require_once __DIR__.'/../vars.php';
	session_start();
	$view = "views/view/";


	// ROTAS
	if(str_contains($_SERVER['REQUEST_URI'],"pages/boletim.php") && $_SESSION['RA']) {
		require_once '../controller/loginController.php';
		require_once '../controller/notasController.php';

		$login = new loginController();
		$notas = new notasController();
		$GLOBALS['disciplinas'] = $login->getMaterias();
		$GLOBALS['notas'] = $notas->getNotasAlunoBimestre($_SESSION['RA']);

		importView($view.'boletim/boletim.php');
	}
	else {
		importView($view.'login/login.php');
	}
?>