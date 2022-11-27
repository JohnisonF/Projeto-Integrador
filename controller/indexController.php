<?php 
	require_once(__DIR__.'/../model/indexModel.php');

	class indexController {

		private $model;

		public function __construct(){
			
			$this->model = new indexModel();
		}

		public function inserePessoa() {
			$dados['nome'] = "Johnison";
			$dados['sobrenome'] = "Furman";
			$dados['email'] = "email@teste.com";

			$options = [
		    	'cost' => 12
			];
			$senha = password_hash("teste123", PASSWORD_BCRYPT, $options);

			$dados['senha'] = $senha;
			$this->model->insertUser($dados);
		}

	}

?>