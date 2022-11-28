<?php 
	require_once(__DIR__.'/../model/disciplinaModel.php');

	class disciplinaController {

		private $model;

		public function __construct(){
			
			$this->model = new disciplinaModel();
		}

		public function getDisciplinaAluno($idUser) {
			return $this->model->getDisciplinaAluno($idUser);
		}

	}

?>