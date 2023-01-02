<?php
    require_once '../config/config.php';
    class Database{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbName = DB_NAME;
        public $conn;
        public $result;

        public function __construct()
        {
            $this->connect();
        }
        public function connect(){
            $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbName);
            if(!$this->conn){
                echo "Connect Fail!";
                exit();
            }else{
                mysqli_set_charset($this->conn,'utf8'); // tranh loi font
            }
            return $this->conn;
        }

        public function execute($query){
            $this->result = $this->conn->query($query);
            if($this->result){
                return $this->result;
            }else{
                echo "Select Fail!";
            }
        }

        public function selectData(){
            if($this->result){
                $data = mysqli_fetch_assoc($this->result);
            }else{ 
                $data = 0;
            }
            return $data;
        }

    }
?>