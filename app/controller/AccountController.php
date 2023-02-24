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
            $role = new Role();
            $roles = $role->listRole();
            $account = new Account();
            $errors = array();
            if(isset($_POST['insertAccount'])){
                $name = $_POST['name'];
                $username = $_POST['username'];
                $sex = $_POST['sex'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $idRole = $_POST['id_role'];
                // print_r($_POST);
                if($name == ''){
                    $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }else if(preg_match("/^[0-9]{0,1}$/",$name)){
                    $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                }
                if($username == ''){
                    $errors['username'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }else if(preg_match("/^[0-9]{0,1}$/",$username)){
                    $errors['username'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                }
                if($sex == ''){
                    $errors['sex'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }
                if($email == ""){
                    $errors['email'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }
                if($phone == ""){
                    $errors['phone'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }
                if($address == ""){
                    $errors['address'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }
                if($password == ''){
                    $errors['password'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }else if(!preg_match("/^([A-Z]{1})(?=.*\d)([A-Za-z\d!@#$%^&*()_+\-=\[\]{};]{8,32})$/",$_POST['password'])){
                    $errors['password'] = '<span class="text-danger">Chữ cái đầu phải viết hoa và ít nhất có 1 ký tự đặc biệt và 1 chữ số và phải ít nhất có 8 ký tự!</span>';
                }
                if($idRole == ''){
                    $errors['idRole'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }
                if(count($errors) == 0){
                    // echo "1";
                    $insert = $account->insertAccount($name,$username,$sex,$email,$phone,$address,md5($_POST['password']),$idRole);
                    if($insert){
                        $_SESSION['message_account'] = '<span class="text-success">Thêm thành công tài khoản '.$username.'</span>';
                        echo "<script>window.location.href='?action=list-account'</script>";
                    }else{
                        $_SESSION['message_account'] = '<span class="text-danger">Truy vấn có vấn đề, yêu cầu kiểm tra lại</span>';
                        echo "<script>window.location.href='?action=list-account'</script>";
                    }
                }
            }
            require_once '../admin/views/account/insert_account.php';
        } 

        function updateAccount(){
            require_once(realpath(dirname(__FILE__) . '/../models/account.php'));
            require_once(realpath(dirname(__FILE__) . '/../models/role.php'));
            $role = new Role();
            $account = new Account();
            $roles = $role->listRole();
            $errors = array();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $account->getAccountId($id);
                if(isset($_POST['editAccount'])){
                    $name = $_POST['name'];
                    $sex = $_POST['sex'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $idRole = $_POST['id_role'];
                    if($name == ''){
                        $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }else if(preg_match("/^[0-9]{0,1}$/",$name)){
                        $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                    }
                    if($sex == ''){
                        $errors['sex'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }
                    if($email == ""){
                        $errors['email'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }
                    if($phone == ""){
                        $errors['phone'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }
                    if($address == ""){
                        $errors['address'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }
                    if($idRole == ''){
                        $errors['idRole'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }
                    if(count($errors) == 0){
                        $update = $account->updateAccount($id,$name,$sex,$email,$phone,$address,$idRole);
                        if($update){
                            $_SESSION['message_account'] = '<span class="text-success">Sửa thành công tài khoản '.$username.'</span>';
                            echo "<script>window.location.href='?action=list-account'</script>";
                        }else{
                            $_SESSION['message_account'] = '<span class="text-success">Truy vấn có vấn đề, yêu cầu xem lại</span>';
                            echo "<script>window.location.href='?action=list-account'</script>";
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
                    $_SESSION['message_account'] = '<span class="text-success">Xóa thành công tài khoản</span>';
                    echo "<script>window.location.href='?action=list-account'</script>";
                }
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }

        function login(){
            require_once(realpath(dirname(__FILE__) . '/../models/account.php'));
            $account = new Account();
            $errors = array();
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if($username == "" && $password == ""){
                    $errors['error'] = '<span class="text-danger">Tên tài khoản và mật khẩu bị trống!</span>';
                }else if($username == ""){
                    $errors['error'] = '<span class="text-danger">Tên tài khoản bị trống!</span>';
                }else if($password == ""){
                    $errors['error'] = '<span class="text-danger">Mật khẩu bị trống!</span>';
                }
                if(count($errors) == 0){
                    $login = $account->login($username,md5($password));
                    // print_r($login);
                    if($login->num_rows > 0){
                        $row = $login->fetch_assoc();
                        $name = $row['name'];
                        $_SESSION['username'] = $username;
                        $_SESSION['name'] = $name;
                        echo "<script>window.location.href='?action=dashboard'</script>";
                    }else{
                        $errors['error'] = '<span class="text-danger">Tên tài khoản và mật khẩu bị sai!</span>';
                    }
                }
            }
            require_once '../admin/views/login.php';

        }

        function dashboard(){
            if($_SESSION['username'] == "" && isset($_SESSION['username'])){
                // echo "1";
                echo "<script>window.location.href='http://127.0.0.1/freshfood/admin/'</script>";
            }else{
                require '../admin/views/dashboard.php';
            }
        }

        function logout(){
            unset($_SESSION['username']);
            unset($_SESSION['name']);
            echo "<script>window.location.href='http://127.0.0.1/freshfood/admin/'</script>";
            if($_SESSION['username'] == "" && isset($_SESSION['username'])){
                echo "<script>window.location.href='http://127.0.0.1/freshfood/admin/'</script>";
            }else{
                require '../admin/views/dashboard.php';
            }
        }

        function profile(){
            require_once(realpath(dirname(__FILE__) . '/../models/account.php'));
            $account = new Account();
            $errors = array();
            require_once '../admin/views/account/profile.php';

        }
    }
?>