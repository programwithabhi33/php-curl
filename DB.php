<?php
    class DB {
        private $pdo;
        public function __construct($host,$db,$username,$password){
            $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';',$username.';',$password);
            print_r($pdo);
            die;
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        public function query($query){
            // This is the prepare the query you provided corresponding(This query will prepare by the pdo object prepare method)
            $statement = $this->pdo->prepare($query);

            // After this you got a object in the $statement that has a execute function this will execute the query
            $statement->execute();

            // This will fetch all the records from the corresponding database and the corresponding table
            $data = $statement->fetchAll();
            return $data;
        }
    }




?>