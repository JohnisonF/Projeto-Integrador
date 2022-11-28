<?php
	require_once __DIR__.'/../components/head-pages.php'; 
	require_once __DIR__.'/../vars.php';
	session_start();
	$view = "views/view/";


	// ROTAS
	if(str_contains($_SERVER['REQUEST_URI'],"pages/bibliotecadigital.php") && $_SESSION['RA']) {
		require_once '../controller/livrosController.php';

		$livro = new livrosController();
		$GLOBALS['livros'] = $livro->getLivros();
		$GLOBALS['ano_livros'] = $livro->getAnosLivros();
		$GLOBALS['autor_livros'] = $livro->getAutorLivros();
		$GLOBALS['editora_livros'] = $livro->getEditoraLivros();

		importView($view.'bibliotecadigital/bibliotecadigital.php');
	}
	else {
		importView($view.'login/login.php');
	}
?>