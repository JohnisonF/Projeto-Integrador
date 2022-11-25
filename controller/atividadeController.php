<?php 
	require_once('./model/atividadeModel.php');

	class atividadeController {

		private $model;

		public function __construct(){
			
			$this->model = new atividadeModel();
		}

		public function getAtividadeAluno($idUser) {
			return $this->model->getAtividadeAluno($idUser);
		}

	}

?>