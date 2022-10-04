<?php 
	require_once('./configuration/connect');

	class IndexModel extends Db {
		
		private $table;

		public function __construct(){
			parent::__construct();
			$this->table = '';
		}
	}
?>