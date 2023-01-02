<?php
class CategoryController{

    public $datetime;

    public function __construct()
    {
        $this->datetime = date('Y-m-d H:i:s'); 
    }

    public function listCategory(){
        require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
        $category = new Category();
        // echo realpath(dirname(dirname(__FILE__)));
        $lists = $category->listCategory();
        require_once '../admin/views/category/list_category.php';
    }

    public function insertCategory(){
        require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
        $category = new Category();
        $_SESSION['message_category'] = '';
        if(isset($_POST['insertCategory'])){
            $name = $_POST['name_category'];
            if($name != ''){
                $insert = $category->insertCategory($name,$this->datetime);
                $_SESSION['message_category'] = $insert;
                echo '<script>window.location.href="?action=list-category"</script>';
            }else{
                $_SESSION['error'] = '<span class="text-danger">Không tồn tại tên danh mục!</span>';
                echo '<script>window.location.href="?action=insert-category"</script>';
            }
        }else{
        }
        require '../admin/views/category/insert_category.php';
    } 

    public function editCategory(){
        require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
        $category = new Category();
        $_SESSION['message_category'] = '';
        if(isset($_GET['id'])){
            $idCategory = $_GET['id'];
            $getCategory = $category->getCategoryId($idCategory);
            if(isset($_POST['editCategory'])){
                $name = $_POST['name_category'];
                if($name != ''){
                    $editCategory = $category->updateCategory($name,$idCategory,$this->datetime);
                    if($editCategory){
                        $_SESSION['message_category'] = '<span class="text-success">Sửa thành công danh mục '.$name.'</span>';
                        echo '<script>window.location.href="?action=list-category"</script>';
                    }else{
                        $_SESSION['error'] = '<span class="text-danger">Sửa thất bại danh mục '.$name.'</span>';
                        echo '<script>window.location.href="?action=list-category"</script>';
                    }
                }else{
                    $_SESSION['error'] = '<span class="text-danger">Chưa điền dữ liệu, yêu cầu điền ngay!</span>';
                    echo '<script>window.location.href="?action=edit-category&id='.$idCategory.'"</script>';
                }
            }
            require '../admin/views/category/edit_category.php';
        }
    }

    public function deleteCategory(){
        require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
        $category = new Category();
        $_SESSION['message_category'] = '';
        if(isset($_GET['id'])){
            $idCategory = $_GET['id'];
            $deleteCategory = $category->deleteCategory($idCategory);
            if($deleteCategory){
                $_SESSION['message_category'] = '<span class="text-success">Xóa thành công danh mục</span>';
                echo '<script>window.location.href="?action=list-category"</script>';
            }else{
                $_SESSION['message_category'] = '<span class="text-danger">Sửa thất bại danh mục</span>';
                echo '<script>window.location.href="?action=list-category"</script>';
            }
        }
    }
 }
?>