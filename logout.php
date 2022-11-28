<?php 
	require_once 'components/head.php';
	require_once 'vars.php';
	session_start();


	session_destroy();
	$url = 'http://localhost/projetoIntegrador/index.php';
	while (ob_get_status()) {
	    ob_end_clean();
	}
	header( "Location: $url" );


?>