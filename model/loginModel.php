<?php 
	require_once(__DIR__.'/../configuration/connect.php');

	class loginModel extends Db {
		
		public $database;

		public function __construct(){
			parent::__construct();
			$this->database = new Db();
		}

		public function login($dados) {
			$sql = "SELECT u.* FROM usuario u WHERE u.id = '".$dados['login']."' OR u.email = '".$dados['login']."'";
			$statement = $this->database->connection->prepare($sql);
			if($statement->execute()){
				$values = $statement->fetchAll();
				if(count($values) > 0){
					if($dados['senha'] == $values[0]['senha']){
						print_r("DEUBOAHEHEHE");
						return $values[0];
					}
					else {
						return false;
					}
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
		public function getMaterias() {
			$sql = "SELECT m.nome, m.idCurso, m.periodo FROM materia m LEFT JOIN usuario u ON u.idCurso = m.idCurso WHERE u.periodo = m.periodo";
			$statement = $this->database->connection->prepare($sql);
			if($statement->execute()){
				$values = $statement->fetchAll();
				if(count($values) > 0){
					return $values;
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
	}
?>