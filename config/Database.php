<?php
    class Database{
        // DB PARAMS
        private $host = 'localhost';
        private $db_name = 'myblog';
        private $username = 'shayon';
        private $password = "Shayon1234";
        private $conn;

        // DB CONNECT
        public function connect(){
            $this->conn= null;

            // CREATE NEW PDO OBJECT
            try {
                //code...
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                //throw $th;
                echo 'connection error: ' . $e->getMessage();
            }
            return $this->conn;
        }

    }