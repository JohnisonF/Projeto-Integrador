<?php 
	require_once './vars.php';
	session_start();
	$view = "views/view/";


	// ROTAS
	if(str_contains($_SERVER['REQUEST_URI'],"correcaotexto.php") && $_SESSION['RA']) {
		require_once './controller/loginController.php';

		$login = new loginController();
		$GLOBALS['disciplinas'] = $login->getMaterias();

		importView($view.'home/correcaotexto.php');
	}
	else {
		importView($view.'login/login.php');
	}





	function importView($v){
		require_once 'components/head.php';


		require_once $v;
		
		if(str_ends_with($v,'login.php')) {
			require_once 'components/footerlogin.php';
		}
		else {
			require_once 'components/footer.php';
		}
	}
?>