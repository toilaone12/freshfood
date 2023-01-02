<?php
    class PaymentController{

        function __construct()
        {
            
        }

        function listPayment(){
            require_once(realpath(dirname(__FILE__) . '/../models/payment.php'));
            $payment = new Payment();
            $lists = $payment->listPayment();
            require_once '../admin/views/payment/list_payment.php';

        }

        function insertPayment(){
            require_once(realpath(dirname(__FILE__) . '/../models/payment.php'));
            $payment = new Payment();
            $errors = array();
            if(isset($_POST['insertPayment'])){
                $name = $_POST['name'];
                if($name == ''){
                    $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }else if(preg_match("/^['0-9']{0,1}$/",$name)){
                    $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                }
                if(count($errors) == 0){
                    $insert = $payment->insertPayment($name);
                    if($insert){
                        $_SESSION['message_payment'] = '<span class="text-success">Thêm thành công phương thức '.$name.'</span>';   
                        echo "<script>window.location.href='?action=list-payment'</script>";
                    }else{
                        $_SESSION['message_payment'] = '<span class="text-danger">Thêm thành công phương thức '.$name.'</span>';   
                        echo "<script>window.location.href='?action=list-payment'</script>";
                    }
                }
            }
            require_once '../admin/views/payment/insert_payment.php';
        } 

        function updatePayment(){
            require_once(realpath(dirname(__FILE__) . '/../models/payment.php'));
            $payment = new Payment();
            $errors = array();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $payment->getPaymentId($id);
                if(isset($_POST['editPayment'])){
                    $name = $_POST['name'];
                    if($name == ''){
                        $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }else if(preg_match("/^['0-9']{0,1}$/",$name)){
                        $errors['name'] = '<span class="text-danger">Chữ cái đầu tiên phải là ký tự!</span>';
                    }
                    if(count($errors) == 0){
                        $update = $payment->updatePayment($id,$name);
                        if($update){
                            $_SESSION['message_payment'] = '<span class="text-success">Sửa thành công phương thức '.$name.'</span>';     
                            echo "<script>window.location.href='?action=list-payment'</script>";
                        }else{
                            $_SESSION['message_payment'] = '<span class="text-danger">Sửa thất bại phương thức '.$name.'</span>';     
                            echo "<script>window.location.href='?action=list-payment'</script>";
                        }
                }
                }
                require_once '../admin/views/payment/edit_payment.php';
            }
        }

        function deletePayment(){
            require_once(realpath(dirname(__FILE__) . '/../models/payment.php'));
            $payment = new Payment();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $delete = $payment->deletePayment($id);
                if($delete){
                    $_SESSION['message_payment'] = '<span class="text-success">Xóa thành công phương thức</span>';     
                    echo "<script>window.location.href='?action=list-payment'</script>";
                }
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }
    }
?>