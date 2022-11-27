<?php 
	$GLOBALS['disciplinas'] = [];
	$GLOBALS['atividades'] = [];
	$GLOBALS['livros'] = [];
	$GLOBALS['notas'] = [];


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
?>