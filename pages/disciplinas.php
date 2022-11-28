<?php
	require_once __DIR__.'/../components/head-pages.php'; 
	require_once __DIR__.'/../vars.php';
	session_start();
	$view = "views/view/";


	// ROTAS
	if(str_contains($_SERVER['REQUEST_URI'],"pages/disciplinas.php") && $_SESSION['RA']) {
		require_once '../controller/atividadeController.php';
		require_once '../controller/disciplinaController.php';

		$discp = new disciplinaController();
		$atividade = new atividadeController();
		$GLOBALS['disciplinas'] = $discp->getDisciplinaAluno($_SESSION['RA']);
		$GLOBALS['atividades'] = $atividade->getAtividadeAluno($_SESSION['RA']);
		importView($view.'disciplinas/disciplinas.php');
	}
	else {
		importView($view.'login/login.php');
	}
?>