<?php
    session_start();
    require '../config/config.php';
    require '../app/models/database.php';
    $db = new Database();
    if(isset($_GET['action']) || $_SESSION['res']){
        require_once 'layouts/header.php';
        
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            require '../route/web.php';
        }else{
            require '../admin/views/dashboard.php';
        }
        
        require_once 'layouts/footer.php';
    }else{
        require_once '../admin/views/login.php';
    }
    
?>
