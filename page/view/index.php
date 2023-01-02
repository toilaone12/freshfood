<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshFood</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../font/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="../css/bundle.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    <?php
        include '../include/header.php';
    ?>
    <!-- Slider -->
    <div class="swiper-banner swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide text-center"><img class="w-100 h-100" src="http://freshfoods.vn/images/cover-beef.jpg" alt=""></div>
            <div class="swiper-slide text-center"><img class="w-100 h-100" src="http://freshfoods.vn/images/cover-beef.jpg" alt=""></div>
            <div class="swiper-slide text-center"><img class="w-100 h-100" src="http://freshfoods.vn/images/cover-beef.jpg" alt=""></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Slider -->
    <!-- Feature -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-4 postion-relative">
                <img src="../img/slider1.jpg" class="w-100" style="height: 200px;" alt="">
                <a href="" class="border-white feauture-link" style="background-color: transparent;">
                    <span class="btn rounded-0 bg-light btn py-md-2 px-md-3 py-sm-1 px-sm-1 m-1 text-uppercase py-2 px-3 font-weight-bold f-14">Thực phẩm</span>
                </a>
            </div>
            <div class="col-sm-4 postion-relative">
                <img src="../img/slider1.jpg" class="w-100" style="height: 200px;" alt="">
                <a href="" class="border-white feauture-link" style="background-color: transparent;">
                    <span class="btn rounded-0 bg-light btn py-md-2 px-md-3 py-sm-1 px-sm-1 m-1 text-uppercase py-2 px-3 font-weight-bold f-14">Thực phẩm</span>
                </a>
            </div>
            <div class="col-sm-4 postion-relative">
                <img src="../img/slider1.jpg" class="w-100" style="height: 200px;" alt="">        
                <a href="" class="border-white feauture-link" style="background-color: transparent;">
                    <span class="btn rounded-0 bg-light btn py-md-2 px-md-3 py-sm-1 px-sm-1 m-1 text-uppercase py-2 px-3 font-weight-bold f-14">Thực phẩm</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Feature -->
    <!-- New Product -->
    <div class="bg-green">
        <div class="container mb-5 py-5 position-relative h-100">
            <span class="text-center mb-2 f-20 d-block text-uppercase text-white">Thực phẩm mới nhất</span>
            <h3 class="fa-brands fa-pagelines mb-4 text-white d-block text-center"></h3>
            <div class="swiper-product bg-green pb-5 px-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card"> 
                            <img class="card-img-top border-bottom h-50" src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" alt="Card image cap">
                            <div class="py-2 px-2" style="display: grid;">
                                <span class="card-title f-16">Cá hồi tươi nguyên con</span>
                                <span class="card-text text-center f-14">299.000/1Kg</span>
                                <a href="#" class="btn-cart font-weight-bold text-danger f-14">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-img-top border-bottom h-50" src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" alt="Card image cap">
                            <div class="py-2 px-2" style="display: grid;">
                                <span class="card-title f-16">Cá hồi tươi nguyên con</span>
                                <span class="card-text text-center f-14">299.000/1Kg</span>
                                <a href="#" class="btn-cart font-weight-bold text-danger f-14">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-img-top border-bottom h-50" src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" alt="Card image cap">
                            <div class="py-2 px-2" style="display: grid;">
                                <span class="card-title f-16">Cá hồi tươi nguyên con</span>
                                <span class="card-text text-center f-14">299.000/1Kg</span>
                                <a href="#" class="btn-cart font-weight-bold text-danger f-14">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-img-top border-bottom h-50" src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" alt="Card image cap">
                            <div class="py-2 px-2" style="display: grid;">
                                <span class="card-title f-16">Cá hồi tươi nguyên con</span>
                                <span class="card-text text-center f-14">299.000/1Kg</span>
                                <a href="#" class="btn-cart font-weight-bold text-danger f-14">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img class="card-img-top border-bottom h-50" src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" alt="Card image cap">
                            <div class="py-2 px-2" style="display: grid;">
                                <span class="card-title f-16">Cá hồi tươi nguyên con</span>
                                <span class="card-text text-center f-14">299.000/1Kg</span>
                                <a href="#" class="btn-cart font-weight-bold text-danger f-14">Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next" style="top: 43%"></div>
                <div class="swiper-button-prev" style="top: 43%"></div>
            </div>
        </div>
    </div>
    <!-- New Product -->
    <!-- Handbook -->
    <div class="container mb-4">
        <span class="text-center mb-2 f-20 d-block text-uppercase text-dark">Cẩm nang nấu ăn</span>
        <h3 class="fa-solid fa-utensils text-dark d-block text-center mb-4"></h3>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-12 col-md-6">
                <a href="" class="text-dark">
                    <div class="card-handbook border-0 mx-2">
                        <img src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" style="height: 250px;" alt="" class="w-100">
                        <div class="card-body">
                            <h5 class="card-title">Thịt bò hầm nấm</h5>
                            <p class="card-text f-14">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-12 col-md-6">
                <a href="" class="text-dark">
                    <div class="card-handbook border-0 mx-2">
                        <img src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" style="height: 250px;" alt="" class="w-100">
                        <div class="card-body">
                            <h5 class="card-title">Thịt bò hầm nấm</h5>
                            <p class="card-text f-14">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-12 col-md-6">
                <a href="" class="text-dark">
                    <div class="card-handbook border-0 mx-2">
                        <img src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" style="height: 250px;" alt="" class="w-100">
                        <div class="card-body">
                            <h5 class="card-title">Thịt bò hầm nấm</h5>
                            <p class="card-text f-14">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Handbook -->
    <?php
        include '../include/footer.php';
    ?>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-banner', {
        // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            // autoplay: {
            //     // delay: 5000,
            // },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                992: {
                    slidesPerView: 1,
                },
                1200: {
                    slidesPerView: 1,
                    slidesPerGroup: 1, //se truot 4 lan
                },
                1760: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                }
            }
        });

        const swiperProduct = new Swiper(".swiper-product", {
            slidesPerView: 4,
            spaceBetween: 30,
            fade: 'true',
            centerSlider: 'true',
            direction: 'horizontal',
            loop: true,
            loopFillGroupWithBlank: true,
            grabCursor: 'true',
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // direction: 'horizontal',
            // loop: true,

            // // If we need pagination
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 4,
                    slidesPerGroup: 1, //se truot 4 lan
                },
                1760: {
                    slidesPerView: 5,
                    slidesPerGroup: 1,
                }
            }
        });
    </script>
</body>
</html>