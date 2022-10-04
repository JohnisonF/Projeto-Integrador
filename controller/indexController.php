<?php 
	require_once('./model/indexModel.php');

	class indexController {

		private $model;

		public function __construct(){
			
			$this->model = new indexModel();
		}

	}

?>