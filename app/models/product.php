<?php
    class Product extends Database{
        public $db;
        public $timestamps;

        public function __construct()
        {
            $this->db = new Database();
            $this->db->connect();
            $this->timestamps = date('Y-m-d H:i:s');
        }
        //danh sach 
        public function listProduct(){
            $query = "SELECT *, p.created_at as 'created_at', p.name as 'name' ,c.name as 'name_category' FROM product as p 
            INNER JOIN category as c ON p.id_category = c.id_category";
            $result = $this->db->execute($query);
            $lists = array();
            while($product = $result->fetch_assoc()){
                $lists[] = $product;
            }
            return $lists;
        }
        //them danh muc
        public function insertProduct($idCategory,$code,$image,$name,$quantity,$price,$description,$content){
            $query = "INSERT INTO product (id_category,code,image,name,quantity,quantity_sold,price,description,content,created_at,modified_at) 
            VALUES ($idCategory,'$code','$image','$name',$quantity,0,$price,'$description','$content','$this->timestamps','$this->timestamps')";
            $result = $this->db->execute($query);
            return $result;
        }
        //lay ten danh muc 
        public function getProductId($id){
            $query = "SELECT *, p.name as 'name' ,c.name as 'name_category' FROM product as p 
            INNER JOIN category as c ON p.id_category = c.id_category WHERE id_product = $id";
            $result = $this->db->execute($query);
            $data = $result->fetch_assoc();
            return $data;
        }

        public function updateProduct($id,$idCategory,$code,$image,$name,$quantity,$price,$description,$content){
            $query = "UPDATE product SET name = '$name', code = '$code', image = '$image', 
            quantity = $quantity, price = $price, description = '$description', content = '$content',
            id_category = $idCategory, modified_at = '$this->timestamps' WHERE id_product = $id";
            $result = $this->db->execute($query);
            return $result;
        }

        public function deleteProduct($id){
            $query = "DELETE FROM product WHERE id_product = $id";
            $result = $this->db->execute($query);
            return $result;
        }
    }
?>