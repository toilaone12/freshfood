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
            if($result->num_rows > 0){
                while($category = $result->fetch_assoc()){
                    $listCategory[] = $category;
                }
            }else{
                $listCategory = [];
            }
            return $listCategory;
        }
        //them danh muc
        public function insertCategory($name,$parentId,$timestamps){
            $query = "INSERT INTO category (name,parent_id,created_at,modified_at) VALUES ('$name','$parentId','$timestamps','$timestamps')";
            $result = $this->db->execute($query);
            if($result){
                return '<span class="text-success">Thêm thành công danh mục '.$name.'</span>';
            }else{
                return '<span class="text-danger">Truy vấn thất bại!</span>';
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
        public function updateCategory($name,$parentId,$idCategory,$timestamps){
            $query = "UPDATE category SET name = '$name', parent_id = '$parentId', modified_at = '$timestamps' WHERE id_category = $idCategory";
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