<?php
    require_once '../config/config.php';

    class Role extends Database{
        public $db;
        public $timestamps;

        public function __construct()
        {
            $this->db = new Database();
            $this->db->connect();
            $this->timestamps = date('Y-m-d H:i:s');
        }

        public function listRole(){
            $lists = array();
            $query = "SELECT * FROM role";
            $result = $this->db->execute($query);
            while($data = $result->fetch_assoc()){
                $lists[] = $data;
            }
            return $lists;
        }

        public function insertRole($name){
            $query = "INSERT INTO role VALUES ('','$name','$this->timestamps','$this->timestamps')";
            $result = $this->db->execute($query);
            return $result;
        }

        public function getRoleId($id){
            $query = "SELECT * FROM role WHERE id_role = $id";
            $result = $this->db->execute($query);
            $data = $result->fetch_assoc();
            return $data;
        }

        public function updateRole($id,$name){
            $query = "UPDATE role SET name = '$name', modified_at = '$this->timestamps' WHERE id_role = $id";
            $result = $this->db->execute($query);
            return $result;
        }

        public function deleteRole($id){
            $query = "DELETE FROM role WHERE id_role = $id";
            $result = $this->db->execute($query);
            return $result;
        }
    }
?>