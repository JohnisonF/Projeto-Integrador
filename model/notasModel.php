<?php 
	require_once(__DIR__.'/../configuration/connect.php');

	class notasModel extends Db {
		
		public $database;

		public function __construct(){
			parent::__construct();
			$this->database = new Db();
		}

		public function getNotasAlunoBimestre($idUser) {
			$sql = "SELECT m.nome as materia,mn.id, mn.nota,mn.bimestre,mn.idMateria   
			FROM materia_nota mn 
			LEFT JOIN materia m ON m.id = mn.idMateria 
			WHERE mn.idAluno = {$idUser} ORDER BY bimestre, idMateria";
			$statement = $this->database->connection->prepare($sql);
			if($statement->execute()){
				$values = $statement->fetchAll();
				return $values;
			}
			else {
				return false;
			}
		}

	}
?>