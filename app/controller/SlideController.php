<?php
    class SlideController{

        function __construct()
        {
            
        }

        function listSlide(){
            require_once(realpath(dirname(__FILE__) . '/../models/slide.php'));
            $slide = new Slide();
            $lists = $slide->listSlide();
            require_once '../admin/views/slide/list_slide.php';

        }

        function insertSlide(){
            require_once(realpath(dirname(__FILE__) . '/../models/slide.php'));
            $slide = new Slide();
            $errors = array();
            if(isset($_POST['insertSlide'])){
                $name = $_POST['name'];
                $imageName = pathinfo($_FILES['image']['name'],PATHINFO_FILENAME);
                $extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
                $image = $imageName.'_'.time().'.'.$extension;
                $size = $_FILES['image']['size'];
                if($_FILES['image']['name'] != ''){
                    if($size > 500000){
                        $errors['image'] = '<span class="text-danger">Quá kích thước ảnh cho phép!</span>';
                    }
                    else if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'ico' && $extension != 'webp'){
                        $errors['image'] = '<span class="text-danger">Sai định dạng của ảnh!</span>';
                    }
                }else{
                    $errors['image'] = '<span class="text-danger">Bạn chưa thêm ảnh!</span>';
                }
                if($name == ''){
                    $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }
                if(count($errors) == 0){
                    if(move_uploaded_file($_FILES['image']['tmp_name'], '../admin/upload/slide/'.$image)){
                        $insert = $slide->insertSlide($name,$image);
                        if($insert){
                            $_SESSION['message_slide'] = '<span class="text-success">Thêm thành công quảng cáo '.$name.'</span>';
                            echo '<script>window.location.href="?action=list-slide"</script>';
                        }else{
                            $_SESSION['message_slide'] = '<span class="text-danger">Thêm thất bại quảng cáo '.$name.'</span>';
                            echo '<script>window.location.href="?action=list-slide"</script>';
                        }
                    }
                }
            }
            require_once '../admin/views/slide/insert_slide.php';
        } 

        function updateSlide(){
            require_once(realpath(dirname(__FILE__) . '/../models/slide.php'));
            $slide = new Slide();
            $errors = array();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $data = $slide->getSlideId($id);
                if(isset($_POST['editSlide'])){
                    $name = $_POST['name'];
                    $imageOld = $_POST['image_old'];
                    $imageName = pathinfo($_FILES['image']['name'],PATHINFO_FILENAME);
                    $extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
                    $image = $imageName.'_'.time().'.'.$extension;
                    $size = $_FILES['image']['size'];
                    if($name == ''){
                        $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                    }
                    if($_FILES['image']['name'] != ''){
                        if($size > 500000){
                            $errors['image'] = '<span class="text-danger">Quá kích thước ảnh cho phép!</span>';
                        }
                        else if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg' && $extension != 'ico' && $extension != 'webp'){
                            $errors['image'] = '<span class="text-danger">Sai định dạng của ảnh!</span>';
                        }
                    }
                    if(count($errors) == 0){
                        if(move_uploaded_file($_FILES['image']['tmp_name'], '../admin/upload/slide/'.$image)){
                            if(file_exists('../admin/upload/slide/'.$imageOld)){
                                unlink('../admin/upload/slide/'.$imageOld);
                            }
                            $update = $slide->updateSlide($id,$name,$image);
                            if($update){
                                $_SESSION['message_slide'] = '<span class="text-success">Sửa thành công quảng cáo '.$name.'</span>';
                                echo '<script>window.location.href="?action=list-slide"</script>';
                            }else{
                                $_SESSION['message_slide'] = '<span class="text-danger">Sửa thất bại quảng cáo '.$name.'</span>';
                                echo '<script>window.location.href="?action=list-slide"</script>';
                            }
                        }else{
                            $update = $slide->updateSlide($id,$name,$imageOld);
                            if($update){
                                $_SESSION['message_slide'] = '<span class="text-success">Sửa thành công quảng cáo '.$name.'</span>';
                                echo '<script>window.location.href="?action=list-slide"</script>';
                            }else{
                                $_SESSION['message_slide'] = '<span class="text-danger">Sửa thất bại quảng cáo '.$name.'</span>';
                                echo '<script>window.location.href="?action=list-slide"</script>';
                            }
                        }
                    }
                }
                require_once '../admin/views/slide/edit_slide.php';
            }
        }

        function deleteSlide(){
            require_once(realpath(dirname(__FILE__) . '/../models/slide.php'));
            $slide = new Slide();
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $slideId = $slide->getSlideId($id);
                $delete = $slide->deleteSlide($id);
                if($delete){
                    unlink('../admin/upload/slide/'.$slideId['image']);
                    $_SESSION['message_slide'] = '<span class="text-success">Xóa thành công quảng cáo '.$slideId['name'].'</span>';
                    echo '<script>window.location.href="?action=list-slide"</script>';
                }
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }
    }
?>