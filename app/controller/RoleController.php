<?php
    class RoleController{

        function __construct()
        {
            
        }

        function listRole(){
            require_once(realpath(dirname(__FILE__) . '/../models/role.php'));
            $role = new Role();
            $lists = $role->listRole();
            require_once '../admin/views/role/list_role.php';

        }

        function insertRole(){
            require_once(realpath(dirname(__FILE__) . '/../models/role.php'));
            $role = new Role();
            $errors = array();
            if(isset($_POST['insertRole'])){
                $name = $_POST['name'];
                if($name == ''){
                    $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }else if(preg_match("/^['0-9']{0,1}$/",$name)){
                    $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                }
                if(count($errors) == 0){
                    $insert = $role->insertRole($name);
                    if($insert){
                        echo "<script>window.localtion.href='?action=list-role'</script>";
                    }else{
                        echo "<script>window.localtion.href='?action=list-role'</script>";
                    }
                }
            }
            require_once '../admin/views/role/insert_role.php';
        } 

        function updateRole(){
            require_once(realpath(dirname(__FILE__) . '/../models/role.php'));
            $role = new Role();
            $errors = array();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $role->getRoleId($id);
                if(isset($_POST['editRole'])){
                    $name = $_POST['name'];
                    if($name == ''){
                        $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }else if(preg_match("/^['0-9']{0,1}$/",$name)){
                        $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                    }
                    if(count($errors) == 0){
                        $update = $role->updateRole($id,$name);
                        if($update){
                            echo "<script>window.localtion.href='?action=list-role'</script>";
                        }else{
                            echo "<script>window.localtion.href='?action=list-role'</script>";
                        }
                }
                }
                require_once '../admin/views/role/edit_role.php';
            }
        }

        function deleteRole(){
            require_once(realpath(dirname(__FILE__) . '/../models/role.php'));
            $role = new Role();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $delete = $role->deleteRole($id);
                if($delete){
                    echo "<script>window.localtion.href='?action=list-role'</script>";
                }
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }
    }
?>