<?php
    class Db{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $name = "quiz1_test";

        public function connect(){
            $this->conn = null;

            try{
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->name, $this->user, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            catch(PDOException $e){
                echo "Connection Error: ",$e->getMessage();
            }

            return $this->conn;

        }

    }
?>