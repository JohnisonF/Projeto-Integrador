<?php 
	require_once(__DIR__.'/../configuration/connect.php');

	class disciplinaModel extends Db {
		
		public $database;

		public function __construct(){
			parent::__construct();
			$this->database = new Db();
		}

		public function getDisciplinaAluno($idUser) {
			$sql = "SELECT m.nome,m.id as idDisciplina, c.nome as curso,c.sigla, prf.nome as professor 
			FROM materia m 
			LEFT JOIN curso c ON c.id = m.idCurso 
			LEFT JOIN usuario prf ON prf.id = m.idProfessor 
			LEFT JOIN usuario u ON u.idCurso = c.id
			WHERE u.id = {$idUser}";
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