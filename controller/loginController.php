<?php 
	require_once('./model/loginModel.php');

	class loginController {

		private $model;

		public function __construct(){
			
			$this->model = new loginModel();
		}

		public function login() {
			$retorno = $this->model->login($_POST);
			if($retorno) {
				echo 'EEEEE';
				$_SESSION['nome'] = $retorno['firstname'];
				$_SESSION['sobrenome'] = $retorno['lastname'];
				$_SESSION['email'] = $retorno['email'];
				$_SESSION['RA'] = $retorno['id'];

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