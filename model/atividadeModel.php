<?php 
	require_once('./configuration/connect.php');

	class atividadeModel extends Db {
		
		public $database;

		public function __construct(){
			parent::__construct();
			$this->database = new Db();
		}

		public function getAtividadeAluno($idUser) {
			$sql = "SELECT a.nome,c.nome as curso,DATE_FORMAT(a.dataPostagem, '%d/%m') as dataPostagem,DATE_FORMAT(a.dataInicio, '%d/%m') as dataInicio,DATE_FORMAT(a.dataFim, '%d/%m') as dataFim,a.dataFim as dataSemFormat,DATE_ADD(a.dataFim, INTERVAL -3 DAY) as dataAntes, DATE_FORMAT(a.dataFim, '%H:%i') as horaFim
			FROM atividade a 
			LEFT JOIN materia m ON m.id = a.idMateria 
			LEFT JOIN usuario u ON u.idCurso = m.idCurso 
			LEFT JOIN curso c ON c.id = m.idCurso 
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