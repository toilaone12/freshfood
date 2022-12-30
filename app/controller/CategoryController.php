<?php

class CategoryController{
    
    public function listCategory(){
        require_once(realpath(dirname(__FILE__) . '/../models/category.php'));
        $category = new Category();
        // echo realpath(dirname(dirname(__FILE__)));
        $lists = $category->listCategory();
        require_once '../admin/views/category/list_category.php';
    }
 }
?>