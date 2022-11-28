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

		public function getLivros($nome = null,$ano = null,$autor = null,$editora = null,$nota = null) {
			return $this->model->getLivros($nome,$ano,$autor,$editora,$nota);
		}

		public function getAnosLivros(){
			return $this->model->getAnosLivros();
		}
		public function getAutorLivros(){
			return $this->model->getAutorLivros();
		}
		public function getEditoraLivros(){
			return $this->model->getEditoraLivros();
		}

	}

?>