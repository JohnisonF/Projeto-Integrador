<?php 
	require_once('./configuration/connect.php');

	class IndexModel extends Db {
		
		public $database;

		public function __construct(){
			parent::__construct();
			$this->database = new Db();
		}

		public function insertUser($dados) {
			$sql = "INSERT INTO usuario (firstname, lastname, email, password) VALUES ('".$dados['nome']."','".$dados['sobrenome']."','".$dados['email']."','".$dados['senha']."')";
			$statement = $this->database->connection->prepare($sql);
			if($statement->execute()){
				return true;
			}
			else {
				return false;
			}
		}
		public function loginUser($login,$pass) {
			$sql = "SELECT * FROM ";
		}
	}
?>