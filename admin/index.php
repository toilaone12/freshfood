<?php
    session_start();
    require '../config/config.php';
    require '../app/models/database.php';
    $db = new Database();
    
    if(isset($_SESSION['username'])){
        if(isset($_GET['action'])){
            require_once 'layouts/header.php';
            $action = $_GET['action'];
            require_once 'layouts/footer.php';
        }else{
            require '../admin/views/dashboard.php';
        }
        require '../route/web.php';
    }else{
        require '../admin/views/dashboard.php';
    }

?>
