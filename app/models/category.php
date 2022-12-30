<?php
    class Category extends Database{
        public $db;

        public function __construct()
        {
            $this->db = new Database();
            $this->db->connect();
        }
        public function listCategory(){
            $query = "SELECT * FROM category";
            $result = $this->db->execute($query);
            $listCategory = array();
            while($category = $result->fetch_assoc()){
                $listCategory[] = $category;
            }
            return $listCategory;
        }
    }
?>