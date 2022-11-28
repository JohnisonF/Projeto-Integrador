<?php 
	require_once __DIR__.'/../model/loginModel.php';
	session_start();
	class loginController {

		private $model;

		public function __construct(){
			
			$this->model = new loginModel();
		}

		public function login($post) {
			$retorno = $this->model->login($post);
			if($retorno) {
				$_SESSION['nome'] = $retorno['nome'];
				$_SESSION['sobrenome'] = $retorno['sobrenome'];
				$_SESSION['email'] = $retorno['email'];
				$_SESSION['RA'] = $retorno['id'];
				$_SESSION['tipo_user'] = $retorno['tipo_usuario'];

				return true;
			}
			else {
				return false;
			}
		}

		public function getMaterias() {
			$retorno = $this->model->getMaterias();
			if($retorno) {
				return $retorno;
			}
		}

	}

?>