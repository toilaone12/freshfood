<?php
    class Category extends Database{
        public $db;

        public function __construct()
        {
            $this->db = new Database();
            $this->db->connect();
        }
        //danh sach 
        public function listCategory(){
            $query = "SELECT * FROM category";
            $result = $this->db->execute($query);
            $listCategory = array();
            while($category = $result->fetch_assoc()){
                $listCategory[] = $category;
            }
            return $listCategory;
        }
        //them danh muc
        public function insertCategory($name,$timestamps){
            $query = "INSERT INTO category (name,created_at,modified_at) VALUES ('$name','$timestamps','$timestamps')";
            $result = $this->db->execute($query);
            if($result){
                return '<span class="text-success">Thêm thành công danh mục '.$name.'</span>';
            }else{
                return '<span class="text-danger">Thêm thất bại danh mục '.$name.'</span>';
            }
        }
        //lay ten danh muc 
        public function getCategoryId($idCategory){
            $query = "SELECT * FROM category WHERE id_category = $idCategory";
            $result = $this->db->execute($query);
            $listCategory = array();
            while($category = $result->fetch_assoc()){
                $listCategory[] = $category;
            }
            return $listCategory;
        }
        //sua danh muc
        public function updateCategory($name,$idCategory,$timestamps){
            $query = "UPDATE category SET name = '$name', modified_at = '$timestamps' WHERE id_category = $idCategory";
            $result = $this->db->execute($query);
            return $result;
        }
        //xoa danh muc
        public function deleteCategory($idCategory){
            $query = "DELETE FROM category WHERE id_category = $idCategory";
            $result = $this->db->execute($query);
            return $result;
        }
    }
?>