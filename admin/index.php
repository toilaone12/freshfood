<?php
    session_start();
    require '../config/config.php';
    require '../app/models/database.php';
    require '../app/controller/AccountController.php';
    $db = new Database();
    $action = "";
    if(isset($_GET['action'])){
        if(isset($_SESSION['username'])){
            require_once 'layouts/header.php';
            $action = $_GET['action'];
            require_once 'layouts/footer.php';
        }else{
            echo "<script>window.location.href='http://127.0.0.1/freshfood/admin/'</script>";
        }
    }
    require '../route/web.php';
?>
