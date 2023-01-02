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
                        echo "<script>window.localtion.href='?action=list-payment'</script>";
                    }else{
                        echo "<script>window.localtion.href='?action=list-payment'</script>";
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
                            echo "<script>window.localtion.href='?action=list-payment'</script>";
                        }else{
                            echo "<script>window.localtion.href='?action=list-payment'</script>";
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
                    echo "<script>window.localtion.href='?action=list-payment'</script>";
                }
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }
    }
?>