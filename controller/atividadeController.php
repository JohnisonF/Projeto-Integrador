<?php 
	require_once(__DIR__.'/../model/atividadeModel.php');

	class atividadeController {

		private $model;

		public function __construct(){
			
			$this->model = new atividadeModel();
		}

		public function getAtividadeAluno($idUser) {
			return $this->model->getAtividadeAluno($idUser);
		}

		public function getAtividadesDisciplina($idDisciplina) {
			return $this->model->getAtividadesDisciplina($idDisciplina);
		}
	}

?>