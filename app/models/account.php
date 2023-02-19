<?php
    require_once '../config/config.php';

    class Account extends Database{
        public $db;
        public $timestamps;

        public function __construct()
        {
            $this->db = new Database();
            $this->db->connect();
            $this->timestamps = date('Y-m-d H:i:s');
        }

        public function listAccount(){
            $lists = array();
            $query = "SELECT *, a.created_at as 'created_at', a.name as 'name' ,r.name as 'name_role' FROM admin as a INNER JOIN role as r ON a.id_role = r.id_role";
            $result = $this->db->execute($query);
            while($data = $result->fetch_assoc()){
                $lists[] = $data;
            }
            return $lists;
        }

        public function insertAccount($name,$username,$sex,$email,$phone,$address,$password,$id_role){
            $query = "INSERT INTO admin VALUES 
            ('','$name','$username','$sex','$email','$phone','$address','$password',$id_role,'$this->timestamps','$this->timestamps')";
            $result = $this->db->execute($query);
            return $result;
        }

        public function getAccountId($id){
            $query = "SELECT *, a.name as 'name' ,r.name as 'name_role' FROM admin as a INNER JOIN role as r ON a.id_role = r.id_role WHERE id_admin = $id";
            $result = $this->db->execute($query);
            $data = $result->fetch_assoc();
            return $data;
        }

        public function updateAccount($id,$name,$sex,$email,$phone,$address,$id_role){
            $query = "UPDATE admin SET name = '$name', sex = '$sex', email = '$email', 
            phone = '$phone', address = '$address', 
            id_role = '$id_role', modified_at = '$this->timestamps' WHERE id_admin = $id";
            $result = $this->db->execute($query);
            return $result;
        }

        public function deleteAccount($id){
            $query = "DELETE FROM admin WHERE id_admin = $id";
            $result = $this->db->execute($query);
            return $result;
        } 

        public function login($username,$password){
            $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $result = $this->db->execute($query);
            return $result;
        }
    }
?>