<?php
    class AccountController{

        function __construct()
        {
            
        }

        function listAccount(){
            require_once(realpath(dirname(__FILE__) . '/../models/account.php'));
            $account = new Account();
            $lists = $account->listAccount();
            require_once '../admin/views/account/list_account.php';

        }

        function insertAccount(){
            require_once(realpath(dirname(__FILE__) . '/../models/account.php'));
            require_once(realpath(dirname(__FILE__) . '/../models/role.php'));
            $account = new Account();
            $role = new Role();
            $roles = $role->listRole();
            $errors = array();
            if(isset($_POST['insertAccount'])){
                $name = $_POST['name'];
                $username = $_POST['username'];
                $sex = $_POST['sex'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = md5($_POST['password']);
                $idRole = $_POST['id_role'];
                if($name == ''){
                    $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }else if(preg_match("/^['0-9']{0,1}$/",$name)){
                    $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                }
                if(preg_match("/^['0-9']{0,1}$/",$username)){
                    $errors['username'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                }
                if(count($errors) == 0){
                    $insert = $account->insertAccount($name,$username,$sex,$email,$phone,$address,$password,$idRole);
                    if($insert){
                        echo "<script>window.localtion.href='?action=list-account'</script>";
                    }else{
                        echo "<script>window.localtion.href='?action=list-account'</script>";
                    }
                }
            }
            require_once '../admin/views/account/insert_account.php';
        } 

        function updateAccount(){
            require_once(realpath(dirname(__FILE__) . '/../models/account.php'));
            $account = new Account();
            $errors = array();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $account->getAccountId($id);
                if(isset($_POST['editAccount'])){
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $sex = $_POST['sex'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $password = md5($_POST['password']);
                    $idRole = $_POST['id_role'];
                    if($name == ''){
                        $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }else if(preg_match("/^['0-9']{0,1}$/",$name)){
                        $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                    }
                    if(count($errors) == 0){
                        $update = $account->updateAccount($id,$name,$username,$sex,$email,$phone,$address,$password,$idRole);
                        if($update){
                            echo "<script>window.localtion.href='?action=list-account'</script>";
                        }else{
                            echo "<script>window.localtion.href='?action=list-account'</script>";
                        }
                }
                }
                require_once '../admin/views/account/edit_account.php';
            }
        }

        function deleteAccount(){
            require_once(realpath(dirname(__FILE__) . '/../models/account.php'));
            $account = new Account();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $delete = $account->deleteAccount($id);
                if($delete){
                    echo "<script>window.localtion.href='?action=list-account'</script>";
                }
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }
    }
?>