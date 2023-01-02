<?php
    require_once '../config/config.php';

    class Slide extends Database{
        public $db;
        public $timestamps;

        public function __construct()
        {
            $this->db = new Database();
            $this->db->connect();
            $this->timestamps = date('Y-m-d H:i:s');
        }

        public function listSlide(){
            $lists = array();
            $query = "SELECT * FROM slide";
            $result = $this->db->execute($query);
            while($data = $result->fetch_assoc()){
                $lists[] = $data;
            }
            return $lists;
        }

        public function insertSlide($name,$image){
            $query = "INSERT INTO slide VALUES ('','$image','$name','$this->timestamps','$this->timestamps')";
            $result = $this->db->execute($query);
            return $result;
        }

        public function getSlideId($id){
            $query = "SELECT * FROM slide WHERE id_slide = $id";
            $result = $this->db->execute($query);
            $data = $result->fetch_assoc();
            return $data;
        }

        public function updateSlide($id,$name,$image){
            $query = "UPDATE slide SET image = '$image',name = '$name', modified_at = '$this->timestamps' WHERE id_slide = $id";
            $result = $this->db->execute($query);
            return $result;
        }

        public function deleteSlide($id){
            $query = "DELETE FROM slide WHERE id_slide = $id";
            $result = $this->db->execute($query);
            return $result;
        }
    }
?>