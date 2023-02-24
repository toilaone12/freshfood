<?php
    class ProductController{
        public $timestamps;

        function listProduct(){
            require_once(realpath(dirname(__FILE__) . '/../models/product.php'));
            $product = new Product();
            $lists = $product->listProduct();
            require_once '../admin/views/product/list_product.php';

        }

        public function insertProduct()
        {
            require_once(realpath(dirname(__FILE__) . '/../models/product.php'));
            require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
            $product = new Product();
            $category = new Category();
            $errors = array();
            $listCategory = $category->listCategory();
            if(isset($_POST['insertProduct'])){
                $code = strtoupper(substr(md5(time()),0,8));
                $idCategory = $_POST['id_category'];
                $name = $_POST['name'];
                $quantity = $_POST['quantity'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $content = $_POST['content'];
                if($quantity == "" || $price == "" || $name == "" || $description == "" || $content == ""){
                    if(preg_match("/^([0-9]{1})([a-z0-9])$/",$name)){
                        $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                    }
                    $errors['name'] = '<span class="text-danger">Tên không được để trống!</span>';
                    $errors['quantity'] = '<span class="text-danger">Số lượng không được để trống!</span>';
                    $errors['price'] = '<span class="text-danger">Giá không được để trống!</span>';
                    $errors['description'] = '<span class="text-danger">Mô tả không được để trống!</span>';
                    $errors['content'] = '<span class="text-danger">Nội dung không được để trống!</span>';
                }
                if(isset($_FILES['image']) || $_FILES['image']['name'] !== ""){
                    $imageName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME); //lay ten name
                    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION); // pathinfo: lay thong tin duong dan
                    $image = $imageName.'.'.$extension;
                    if($_FILES['image']['name'] != ''){
                        if($size > 500000){
                            $errors['image'] = '<span class="text-danger">Quá kích thước ảnh cho phép!</span>';
                        }
                        else if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'ico' && $extension != 'webp'){
                            $errors['image'] = '<span class="text-danger">Sai định dạng của ảnh!</span>';
                        }
                    }
                }else{
                    $errors['image'] = '<span class="text-danger">Bạn chưa thêm ảnh, yêu cầu thêm vào!</span>';
                }
                if(count($errors) == 0){

                    if(move_uploaded_file($_FILES['image']['tmp_name'], '../admin/upload/product/'.$image)){
                        $insertProduct = $product->insertProduct($idCategory,$code,$image,$name,$quantity,$price,$description,$content);
                        if($insertProduct){
                            $_SESSION['message_product'] = '<span class="text-success">Thêm thành công sản phẩm '.$name.'</span>';
                            echo "<script>window.location.href='?action=list-product'</script>";
                        }else{
                            $_SESSION['message_product'] = '<span class="text-danger">Thêm thất bại sản phẩm '.$name.'</span>';
                            echo "<script>window.location.href='?action=list-product'</script>";                           
                        }
                    }
                }

            }
            require_once('../admin/views/product/insert_product.php');
        }

        function updateProduct(){
            require_once(realpath(dirname(__FILE__) . '/../models/product.php'));
            require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
            $category = new Category();
            $product = new Product();
            $categorys = $category->listCategory();
            $errors = array();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $product->getProductId($id);
                if(isset($_POST['editProduct'])){
                    $name = $_POST['name'];
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $quantity = $_POST['quantity'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    $content = $_POST['content'];
                    $idCategory = $_POST['id_category'];
                    $imageOld = $_POST['image_old'];
                    $imageName = pathinfo($_FILES['image']['name'],PATHINFO_FILENAME);
                    $extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
                    $image = $imageName.'_'.time().'.'.$extension;
                    $size = $_FILES['image']['size'];
                    if($name == ''){
                        $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }else if(preg_match("/^([0-9]{1})([a-z0-9])$/",$name)){
                        $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                    }
                    if($quantity == '' || $price == '' || $description == '' || $content == ''){
                        $errors['quantity'] = '<span class="text-danger">Số lượng không được để trống!</span>';
                        $errors['price'] = '<span class="text-danger">Giá không được để trống!</span>';
                        $errors['description'] = '<span class="text-danger">Mô tả không được để trống!</span>';
                        $errors['content'] = '<span class="text-danger">Nội dung không được để trống!</span>';
                    }
                    if($_FILES['image']['name'] != ''){
                        if($size > 500000){
                            $errors['image'] = '<span class="text-danger">Quá kích thước ảnh cho phép!</span>';
                        }
                        else if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'ico' && $extension != 'webp'){
                            $errors['image'] = '<span class="text-danger">Sai định dạng của ảnh!</span>';
                        }
                    }
                    if(count($errors) == 0){
                        if(move_uploaded_file($_FILES['image']['tmp_name'], '../admin/upload/product/'.$image)){
                            unlink('../admin/upload/product/'.$imageOld);
                            $update = $product->updateProduct($id,$idCategory,$code,$image,$name,$quantity,$price,$description,$content);
                            // echo $update;
                            if($update){
                                $_SESSION['message_product'] = '<span class="text-success">Sửa thành công sản phẩm '.$name.'</span>';
                                echo "<script>window.location.href='?action=list-product'</script>";
                            }else{
                                $_SESSION['message_product'] = '<span class="text-danger">Sửa thất bại sản phẩm '.$name.'</span>';
                                echo "<script>window.location.href='?action=list-product'</script>";
                            }
                        }else{
                            $update = $product->updateProduct($id,$idCategory,$code,$imageOld,$name,$quantity,$price,$description,$content);
                            // echo $update;
                            if($update){
                                $_SESSION['message_product'] = '<span class="text-success">Sửa thành công sản phẩm '.$name.'</span>';
                                echo "<script>window.location.href='?action=list-product'</script>";
                            }else{
                                $_SESSION['message_product'] = '<span class="text-danger">Sửa thất bại sản phẩm '.$name.'</span>';
                                echo "<script>window.location.href='?action=list-product'</script>";
                            }
                        }
                }
                }
                require_once '../admin/views/product/edit_product.php';
            }
        }

        function deleteProduct(){
            require_once(realpath(dirname(__FILE__) . '/../models/product.php'));
            $product = new Product();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $delete = $product->deleteProduct($id);
                if($delete){
                    $_SESSION['message_product'] = '<span class="text-success">Xóa thành công sản phẩm</span>';
                    echo "<script>window.location.href='?action=list-product'</script>";
                }
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }
    }
?>