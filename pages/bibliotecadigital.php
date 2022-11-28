<?php
	require_once __DIR__.'/../components/head-pages.php'; 
	require_once __DIR__.'/../vars.php';
	session_start();
	$view = "views/view/";


	// ROTAS
	if(str_contains($_SERVER['REQUEST_URI'],"pages/bibliotecadigital.php") && $_SESSION['RA']) {
		require_once '../controller/livrosController.php';

		$livros = new livrosController();
		$GLOBALS['livros'] = $livros->getLivrosCurso($_SESSION['RA']);

		importView($view.'bibliotecadigital/bibliotecadigital.php');
	}
	else {
		importView($view.'login/login.php');
	}
?>