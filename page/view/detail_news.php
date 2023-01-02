<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshFood</title>
    <link rel="stylesheet" href="../../public/frontend/css/style.css">
    <link rel="stylesheet" href="../../public/frontend/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../public/font/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../public/frontend/css/bundle.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    <?php
        include '../include/header.php';
    ?>
    <!-- Page Header Start -->
    <div class="container-fluid bg-light mb-5 position-relative header-cart px-0" style="background-image: url('http://freshfoods.vn/images/cover-salmon-freshfoods.jpg');">
        <div class="overlay">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
                <div class="d-inline-flex align-items-center">
                    <p class="m-0 ">
                        <a href="" class="text-white" style="text-decoration: none;">
                            <i class="fa-solid fa-house text-white pr-3 f-12"></i>
                            Trang chủ
                        </a>
                    </p>
                    <i class="fa-solid fa-chevron-right text-white px-3" style="font-size: 9px;"></i>
                    <p class="m-0 text-white">Thực phẩm</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Shop Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <h4 class="font-weight-semi-bold"><a href="" class="text-dark">Sườn cừu Mexico</a></h4>
                <p class="text-secondary f-14"><i class="fa-regular fa-clock mr-1"></i> 02/09/2022</p>
                <p class="mb-4 description-news f-14">
                    Món dạ dày trộn cay có được ngon hay không phụ thuộc rất nhiều vào công đoạn làm sạch,
                    vì thế bạn cần phải thực hiện bước này kỹ càng, cẩn thận.
                    Món dạ dày trộn cay có được ngon hay không phụ thuộc rất nhiều vào công đoạn làm sạch,
                    vì thế bạn cần phải thực hiện bước này kỹ càng, cẩn thận.
                    Món dạ dày trộn cay có được ngon hay không phụ thuộc rất nhiều vào công đoạn làm sạch,
                    vì thế bạn cần phải thực hiện bước này kỹ càng, cẩn thận.
                    Món dạ dày trộn cay có được ngon hay không phụ thuộc rất nhiều vào công đoạn làm sạch,
                    vì thế bạn cần phải thực hiện bước này kỹ càng, cẩn thận.
                </p>
            </div>
            <div class="col-lg-4 col-xl-3 pb-5 ml-xl-5">
                <p class="policy-product px-3">
                    <i class="fa-regular f-20 mr-1 fa-thumbs-up"></i>
                    <span class="f-14">Cam kết giá tốt nhất: Chúng tôi cam kết tới khách hàng những sản phẩm tốt nhất với giá thấp nhất.</span> 
                </p>
                <p class="policy-product px-3">
                    <i class="fa-solid f-20 mr-1 fa-truck-fast"></i>
                    <span class="f-14">Giao hàng toàn quốc: Giao hàng tới 64 tỉnh thành với giá cước hợp lý nhất. Đảm bảo thời gian tốt nhất.</span>
                </p>
                <p class="policy-product px-3 mb-5">
                    <i class="fa-regular f-20 mr-1 fa-clock"></i>
                    <span class="f-14">Phục vụ 24/24: Giao hàng tới 64 tỉnh thành với giá cước hợp lý nhất. Thời gian đối với chúng tôi là vàng.</span>
                </p>
                <img src="http://freshfoods.vn/images/contact-freshfoods.png" class="w-100" alt="">
            </div>
        </div>
    </div>
    <!-- Shop End -->
    <!-- Comment Facebook -->
    <div class="container">
        <div class="row col-lg-12">
            <div class="mt-5 fb-like" data-href="http://localhost/freshfood/page/view/detail_product.php" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true">
            </div>
        </div>
        <div class="row col-lg-12">
            <div class="fb-comments mb-5 w-100" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="1"></div>
        </div>
    </div>
    <!-- Comment Facebook -->
    <?php
        include '../include/footer.php';
    ?>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=1280589679344566&autoLogAppEvents=1" nonce="wxBKYU8k"></script>
</body>