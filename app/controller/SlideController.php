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
                if($size > 500000){
                    $errors['image'] = '<span class="text-danger">Quá kích thước ảnh cho phép!</span>';
                }
                if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                    $errors['image'] = '<span class="text-danger">Sai định dạng của ảnh!</span>';
                }
                if($name == ''){
                    $errors['name'] = '<span class="text-danger">Không được để trống dữ liệu!</span>';
                }
                if(count($errors) == 0){
                    if(move_uploaded_file($_FILES['image']['tmp_name'], '../admin/upload/slide/'.$image)){
                        $insert = $slide->insertSlide($name,$image);
                        if($insert){
                            return "<script>window.localtion.href='?action=list-slide'</script>";
                        }else{
                            return "<script>window.localtion.href='?action=list-slide'</script>";
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
                    if(count($errors) == 0){
                        if($size > 500000){
                            $errors['image'] = '<span class="text-danger">Quá kích thước ảnh cho phép!</span>';
                        }
                        if($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg'){
                            $errors['image'] = '<span class="text-danger">Sai định dạng của ảnh!</span>';
                        }
                        if(move_uploaded_file($_FILES['image']['tmp_name'], '../admin/upload/slide/'.$image)){
                            unlink('../admin/upload/slide/'.$imageOld);
                            $update = $slide->updateSlide($id,$name,$image);
                            if($update){
                                return "<script>window.localtion.href='?action=list-slide'</script>";
                            }else{
                                return "<script>window.localtion.href='?action=list-slide'</script>";
                            }
                        }else{
                            $update = $slide->updateSlide($id,$name,$imageOld);
                            if($update){
                                return "<script>window.localtion.href='?action=list-slide'</script>";
                            }else{
                                return "<script>window.localtion.href='?action=list-slide'</script>";
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
                }
                return "<script>window.localtion.href='?action=list-slide'</script>";
            }
            // require_once '../admin/views/slide/insert_slide.php';
        }
    }
?>