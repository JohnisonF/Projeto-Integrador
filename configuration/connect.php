
<?php
    define('HOST', 'localhost');
    define('DBNAME', 'projetointegrador');
    define('USER', 'root');
    define('PASSWORD', 'root');

    class Db{
        protected $connection;

        function __construct(){
            $this->connectDb();
        }

        private function connectDb(){
            try {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            } 
            catch (PDOException $e) {
                echo "Error to connect with Database!".$e->getMessage();
                die();
            }
        } 

    }
?>