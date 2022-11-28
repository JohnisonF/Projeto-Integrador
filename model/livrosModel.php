<?php 
	require_once(__DIR__.'/../configuration/connect.php');

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

		public function getLivros($nome = null,$ano = null,$autor = null,$editora = null,$nota = null) {
			$where = '1 = 1';
			if($ano != null) {
				$where .= " AND l.nome like '".$ano."'";
			}
			if($ano != null) {
				$where .= " AND l.ano = '".$ano."'";
			}
			if($autor != null) {
				$where .= " AND l.autor = '".$autor."'";
			}
			if($editora != null) {
				$where .= " AND l.editora = '".$editora."'";
			}
			if($nota != null) {
				$where .= " AND la.nota = '".$nota."'";
			}

			$sql = "SELECT l.id as idLivro, l.nome, l.autor, l.ano, l.editora, l.imagelink, 
			(SELECT COUNT(la.id) FROM livro_avaliacao la WHERE la.idLivro = l.id) as num_avaliacoes, 
			(SELECT AVG(la.avaliacao) FROM livro_avaliacao la WHERE la.idLivro = l.id) as media_nota, 
			(SELECT COUNT(ld.id) FROM livro_disponibilidade ld WHERE ld.idLivro = l.id) as total_livros, 
			(SELECT COUNT(ld.id) FROM livro_disponibilidade ld WHERE ld.idLivro = l.id AND disponibilidade = 1) as total_disponiveis
				FROM livros l
				WHERE '${where}'";
			$statement = $this->database->connection->prepare($sql);
			if($statement->execute()){
				$values = $statement->fetchAll();
				return $values;
			}
			else {
				return false;
			}
		}

		public function getAnosLivros(){
			$sql = "SELECT ano FROM livros";
			$statement = $this->database->connection->prepare($sql);
			if($statement->execute()){
				$values = $statement->fetchAll();
				return $values;
			}
			else {
				return false;
			}
		}
		public function getAutorLivros(){
			$sql = "SELECT autor FROM livros";
			$statement = $this->database->connection->prepare($sql);
			if($statement->execute()){
				$values = $statement->fetchAll();
				return $values;
			}
			else {
				return false;
			}
		}
		public function getEditoraLivros(){
			$sql = "SELECT editora FROM livros";
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