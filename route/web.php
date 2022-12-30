<?php
    if($action == 'list-category'){
        require '../app/controller/CategoryController.php';
        $request = new CategoryController();
        $request->listCategory();
    }
?>