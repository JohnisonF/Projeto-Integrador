<?php 
	require_once(__DIR__.'/../model/livrosModel.php');

	class livrosController {

		private $model;

		public function __construct(){
			
			$this->model = new livrosModel();
		}

		public function getLivrosCurso($idUser) {
			return $this->model->getLivrosCurso($idUser);
		}

	}

?>