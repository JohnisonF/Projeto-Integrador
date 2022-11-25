<?php 
	require_once('./configuration/connect.php');

	class livrosModel extends Db {
		
		public $database;

		public function __construct(){
			parent::__construct();
			$this->database = new Db();
		}

		public function getLivrosCurso($idUser) {
			$sql = "SELECT l.nome,l.autor,l.ano,l.descricao,l.imagelink 
			FROM livros l 
			LEFT JOIN livro_curso lc ON lc.idLivro = l.id 
			LEFT JOIN usuario u ON u.idCurso = lc.idCurso 
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