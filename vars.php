<?php 
	$GLOBALS['disciplinas'] = [];
	$GLOBALS['atividades'] = [];
	$GLOBALS['livros'] = [];
	$GLOBALS['notas'] = [];
	$GLOBALS['ano_livros'] = [];
	$GLOBALS['autor_livros'] = [];
	$GLOBALS['editora_livros'] = [];


	// Funçõa necessária para rota
	function importView($v){

		require_once $v;
		
		if(str_ends_with($v,'login.php')) {
			require_once __DIR__.'/components/footerlogin.php';
		}
		else {
			require_once __DIR__.'/components/footer.php';
		}
	}

	error_reporting(0);
?>