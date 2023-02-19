<?php
    //Admin
    spl_autoload_register(function($className){
        require_once '../app/controller/'.$className.'.php';
    });
    //Account
    if($action == 'insert-account'){
        // require '../app/controller/CategoryController.php';
        $account = new AccountController();
        $account->insertAccount();
    }else if($action == 'list-account'){
        $account = new AccountController();
        $account->listAccount();
    }else if($action == 'edit-account'){
        $account = new AccountController();
        $account->updateAccount();
    }else if($action == 'delete-account'){
        $account = new AccountController();
        $account->deleteAccount();
    }else{
        $account = new AccountController();
        $account->login();
    }

    //Category
    if($action == 'list-category'){
        // require '../app/controller/CategoryController.php';
        $category = new CategoryController();
        $category->listCategory();
    }
    if($action == 'insert-category'){
        $request = new CategoryController();
        $request->insertCategory();
    }
    if($action == 'edit-category'){
        $request = new CategoryController();
        $request->editCategory();
    }
    if($action == 'delete-category'){
        $request = new CategoryController();
        $request->deleteCategory();
    }
    //Product
    if($action == 'insert-product'){
        $request = new ProductController();
        $request->insertProduct();
    }else if($action == 'list-product'){
        $product = new ProductController();
        $product->listProduct();
    }else if($action == 'edit-product'){
        $product = new ProductController();
        $product->updateProduct();
    }else if($action == 'delete-product'){
        $product = new ProductController();
        $product->deleteProduct();
    }
    
    //Slide
    if($action == 'insert-slide'){
        $slide = new SlideController();
        $slide->insertSlide();
    }else if($action == 'list-slide'){
        $slide = new SlideController();
        $slide->listSlide();
    }else if($action == 'edit-slide'){
        $slide = new SlideController();
        $slide->updateSlide();
    }else if($action == 'delete-slide'){
        $slide = new SlideController();
        $slide->deleteSlide();
    }

    //Role
    if($action == 'insert-role'){
        $role = new RoleController();
        $role->insertRole();
    }else if($action == 'list-role'){
        $role = new RoleController();
        $role->listRole();
    }else if($action == 'edit-role'){
        $role = new RoleController();
        $role->updateRole();
    }else if($action == 'delete-role'){
        $role = new RoleController();
        $role->deleteRole();
    }

    //Payment
    if($action == 'insert-payment'){
        $payment = new PaymentController();
        $payment->insertPayment();
    }else if($action == 'list-payment'){
        $payment = new PaymentController();
        $payment->listPayment();
    }else if($action == 'edit-payment'){
        $payment = new PaymentController();
        $payment->updatePayment();
    }else if($action == 'delete-payment'){
        $payment = new PaymentController();
        $payment->deletePayment();
    }
?>