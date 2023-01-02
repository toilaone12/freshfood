<?php
    //Admin
    //Danh muc
    if($action == 'list-category'){
        require '../app/controller/CategoryController.php';
        $request = new CategoryController();
        $request->listCategory();
    }
    if($action == 'insert-category'){
        require '../app/controller/CategoryController.php';
        $request = new CategoryController();
        $request->insertCategory();
    }
    if($action == 'edit-category'){
        require '../app/controller/CategoryController.php';
        $request = new CategoryController();
        $request->editCategory();
    }
    if($action == 'delete-category'){
        require '../app/controller/CategoryController.php';
        $request = new CategoryController();
        $request->deleteCategory();
    }
    //San pham
    if($action == 'insert-product'){
        require '../app/controller/ProductController.php';
        $request = new ProductController();
        $request->insertProduct();
    }
?>