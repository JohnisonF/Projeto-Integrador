<?php 
	require_once 'components/head.php';
	require_once 'vars.php';
	session_start();
	$view = "views/view/";


	// ROTAS
	if(str_contains($_SERVER['REQUEST_URI'],"index.php") && $_SESSION['RA']) {
		require_once 'controller/loginController.php';
		require_once 'controller/atividadeController.php';
		require_once 'controller/livrosController.php';

		$login = new loginController();
		$atividade = new atividadeController();
		$livros = new livrosController();
		$GLOBALS['disciplinas'] = $login->getMaterias();
		$GLOBALS['atividades'] = $atividade->getAtividadeAluno($_SESSION['RA']);
		$GLOBALS['livros'] = $livros->getLivrosCurso($_SESSION['RA']);

		importView($view.'home/home.php');
	}
	else {
		importView($view.'login/login.php');
	}
?>