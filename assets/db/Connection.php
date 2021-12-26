<?php
class Database {
         //properties, dataset van een bepaalde class
        private $hostname = "ID362619_Eindtaak.db.webhosting.be";
        private $username = "ID362619_Eindtaak";
        private $password = "Mezaga123";
        private $database = "ID362619_Eindtaak";
        private $port = 3306;
        public $conn;

        // constructor
        function __construct() {
            $connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->database, $this->port);

            if ($connection == false) {
                echo "geen connectie met de code";
                die();
            }

            $this->conn = $connection;
        

        }

        // methods
        function getQuery($sql) {
            return mysqli_query($this->conn, $sql)->fetch_all(MYSQLI_ASSOC);
        }
        function updateQuery($sql) {
             mysqli_query($this->conn, $sql);
        }
        

     }
?>