<?php
    class ProductController{
        public $timestamps;

        function __construct()
        {
            $this->timestamps = date('Y-m-d H:i:s'); 
        }

        public function insertProduct()
        {
            require_once(realpath(dirname(__FILE__) . '/../models/product.php'));
            require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
            $product = new Product();
            $category = new Category();
            $listCategory = $category->listCategory();
            if(isset($_POST['insertProduct'])){
                $code = strtoupper(substr(md5(rand(0,99)),0,8));
                $idCategory = $_POST['id_category'];
                $name = $_POST['name'];
                $quantity = $_POST['quantity'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $content = $_POST['content'];
                $timestamps = $this->timestamps;
                if(isset($_FILES['image']) || $_FILES['image']['name'] == ""){
                    $imageName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME); //lay ten name
                    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION); // pathinfo: lay thong tin duong dan
                    $image = $imageName.'.'.$extension;
                    if(move_uploaded_file($_FILES['image']['tmp_name'], '../admin/upload/product/'.$image)){
                        $insertProduct = $product->insertProduct($idCategory,$code,$image,$name,$quantity,$price,$description,$content,$timestamps);
                        // echo $insertProduct;
                        if($insertProduct){
                            return '<span class="text-success">Thêm thành công sản phẩm '.$name.'</span>';
                        }else{
                            return '<span class="text-danger">Thêm thất bại sản phẩm '.$name.'</span>';
                        }
                    }
                }

            }
            require_once('../admin/views/product/insert_product.php');
        }
    }
?>