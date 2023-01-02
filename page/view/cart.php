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
                    <p class="m-0 text-white">Giỏ hàng</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12 table-responsive mb-5">
                <table class="table text-center mb-0">
                    <thead class="bg-white text-dark">
                        <tr>
                            <th style="border-left: 2px solid #dee2e6;">Mã sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng</th>
                            <th style="border-right: 2px solid #dee2e6;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr class="border-cart">
                            <td class="align-middle">Fre0001</td>
                            <td class="align-middle">
                                <img src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" alt="" class="p-2 border border-secondary" style="width: 80px; height: 100px;">
                            </td>
                            <td class="align-middle">Cá hồi nướng</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto align-items-center justify-content-start" style="flex-wrap: nowrap; width: 50px;">
                                    <input type="number" min=0 class="form-control form-control-sm bg-white text-center rounded"> 
                                    <span class="ml-2">Kg</span>
                                </div>
                            </td>
                            <td class="align-middle">250.000đ</td>
                            <td class="align-middle">250.000đ</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr class="border-cart">
                            <td class="align-middle">Fre0001</td>
                            <td class="align-middle">
                                <img src="http://file.freshfoods.vn/global/product/s1-ca-hoi-tuou-nguyen-con.gif" alt="" class="p-2 border border-secondary" style="width: 80px; height: 100px;">
                            </td>
                            <td class="align-middle">Cá hồi nướng</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto align-items-center justify-content-start" style="flex-wrap: nowrap; width: 50px;">
                                    <input type="number" min=0 class="form-control form-control-sm bg-white text-center rounded"> 
                                    <span class="ml-2">Kg</span>
                                </div>
                            </td>
                            <td class="align-middle">250.000đ</td>
                            <td class="align-middle">250.000đ</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr class="border-total">
                            <td class="align-middle" colspan="7">
                                <div class="d-flex justify-content-between pl-sm-3 px-xl-4 px-lg-4 ml-lg-3 ml-xl-3 align-items-center">
                                    <div class="align-middle total-cart">Tổng: 500.000đ</div>
                                    <div class="grid-cart">
                                        <a href="" style="width: 165px;" class="btn bg-green btn-update-cart rounded-0 mr-2 text-white f-14">Cập nhật giỏ hàng</a>
                                        <a href="" style="width: 165px;" class="btn bg-green btn-remove-cart rounded-0 mr-2 text-white f-14">Xóa giỏ hàng</a>
                                        <a href="" style="width: 165px;" class="btn bg-green btn-order rounded-0 text-white f-14">Đặt mua & thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    <!-- Payment & Order Start -->
    <div class="container pt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-4">
                    <h5 class="font-weight-semi-bold mb-4">Đặt hàng và thanh toán</h5>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="label-email font-weight-bold">Email</label>
                            <input class="form-control" type="email" id="label-email" placeholder="Nhập email">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="label-name font-weight-bold">Họ và tên</label>
                            <input class="form-control" type="text" id="label-name" placeholder="Nhập tên">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="label-phone font-weight-bold">Điện thoại</label>
                            <input class="form-control" type="number" min=0 id="label-phone" placeholder="Nhập SĐT">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="label-address font-weight-bold">Địa chỉ</label>
                            <input class="form-control" type="text" id="label-address" placeholder="Nhập địa chỉ">
                        </div>
                        <div class="col-md-12 form-group">
                            <a href="" class="btn bg-green rounded-0 text-white px-4 f-14 mt-2 mb-5">Áp dụng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Payment & Order End -->
    <?php
        include '../include/footer.php';
    ?>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>