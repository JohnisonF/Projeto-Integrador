<?php 
	require_once(__DIR__.'/../model/notasModel.php');

	class notasController {

		private $model;

		public function __construct(){
			
			$this->model = new notasModel();
		}

		public function getNotasAlunoBimestre($idUser) {
			$notas =  $this->model->getNotasAlunoBimestre($idUser);
			$newNotas = [];
			foreach ($notas as $key => $value) {
				foreach ($notas as $key2 => $value2) {
					if($value['idMateria'] == $value2['idMateria'] && $value2['bimestre'] != 1) {
						$notas[$key]['nota'.$value2['bimestre'].'b'] = $value2['nota'];
						unset($notas[$key2]);
					}
				}
			}
			return $notas;
		}

	}

?>