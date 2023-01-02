<?php
    require_once '../config/config.php';

    class Payment extends Database{
        public $db;
        public $timestamps;

        public function __construct()
        {
            $this->db = new Database();
            $this->db->connect();
            $this->timestamps = date('Y-m-d H:i:s');
        }

        public function listPayment(){
            $lists = array();
            $query = "SELECT * FROM payment";
            $result = $this->db->execute($query);
            while($data = $result->fetch_assoc()){
                $lists[] = $data;
            }
            return $lists;
        }

        public function insertPayment($name){
            $query = "INSERT INTO payment VALUES ('','$name','$this->timestamps','$this->timestamps')";
            $result = $this->db->execute($query);
            return $result;
        }

        public function getPaymentId($id){
            $query = "SELECT * FROM payment WHERE id_payment = $id";
            $result = $this->db->execute($query);
            $data = $result->fetch_assoc();
            return $data;
        }

        public function updatePayment($id,$name){
            $query = "UPDATE payment SET name = '$name', modified_at = '$this->timestamps' WHERE id_payment = $id";
            $result = $this->db->execute($query);
            return $result;
        }

        public function deletePayment($id){
            $query = "DELETE FROM payment WHERE id_payment = $id";
            $result = $this->db->execute($query);
            return $result;
        }
    }
?>