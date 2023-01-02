<?php
    class Product extends Database{
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
        public function insertProduct($idCategory,$code,$image,$name,$quantity,$price,$description,$content,$timestamps){
            $query = "INSERT INTO product (id_category,code,image,name,quantity,quantity_sold,price,description,content,created_at,modified_at) 
            VALUES ($idCategory,'$code','$image','$name',$quantity,0,$price,'$description','$content','$timestamps','$timestamps')";
            $result = $this->db->execute($query);
            return $result;
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