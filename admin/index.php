<?php
    session_start();
    require '../config/config.php';
    require '../app/models/database.php';
    require '../app/controller/AccountController.php';
    $db = new Database();
    
    if(isset($_GET['action'])){
        if(isset($_SESSION['username'])){
            require_once 'layouts/header.php';
            $action = $_GET['action'];
            require '../route/web.php';
            require_once 'layouts/footer.php';
        }else{
            echo "<script>window.location.href='http://127.0.0.1/freshfood/admin/'</script>";
        }
    }else{
        $account = new AccountController();
        $account->login();
    }
?>
