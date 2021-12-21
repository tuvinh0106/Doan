<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include 'layout/css.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>

    <!-- Start Header Area -->
    <?php include 'layout/headerpage.php'; ?>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Thông tin cá nhân</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tài khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thông tin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="xulydangxuat.php">Đăng xuất</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Information" role="tabpanel" aria-labelledby="Information-tab">
                    <div class="row">
                        <div class="col-lg-3"> </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php
                                include_once 'utils/get_infor.php';
                                echo '<div class="col-md-12 form-group">
                                    <div>User name</div>   <input type="text" class="form-control" id="username" name="username" placeholder="' . $name . '" disabled>
                                    </div>
                                    <div class="col-md-12 form-group">
                                    <div>Email</div>   <input type="email" class="form-control" id="email" name="email" placeholder="' . $email . '" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" disabled>
                                    </div>'; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div>
                        <form action="">
                            <div class="row reset thay-mk">
                                <div class="col-md-4" style="line-height:47px"><i class="fas fa-id-card"></i> Họ và Tên
                                </div>
                                <div class="col-md-8"><input class="form-control" type="text" name="hoVaTen" value="Test" placeholder="Họ và Tên (VD: Nguyễn Văn A)"></div>
                            </div>
                            <div class="row reset thay-mk">
                                <div class="col-md-4" style="line-height:47px;"><i style="padding:0 4.5px !important;" class="fas fa-mobile-alt"></i> Số điện thoại</div>
                                <div class="col-md-8"><input class="form-control" type="text" name="soDienThoai" value="034xxxxxx" placeholder="Số điện thoại (VD: 0901234567)"></div>
                            </div>
                            <div class="row reset thay-mk">
                                <div class="col-md-4" style="line-height:47px"><i style="padding:0 3.375px !important;" class="fas fa-map-marker-alt"></i> Địa chỉ</div>
                                <div class="col-md-8"><input class="form-control" type="text" name="diaChi" value="Tp HCM" placeholder="Địa chỉ (VD: Tp HCM)"></div>
                            </div>
                            <div style="text-align:center;">
                                <button type="submit" value="submit" class="primary-btn">Thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" style="text-align: center">Mã đơn hàng</th>
                                    <th scope="col" style="text-align: center">Hình ảnh</th>
                                    <th scope="col" style="text-align: center">Thông tin sản phẩm</th>
                                    <th scope="col" style="text-align: center">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2">#SP01</td>
                                    <td><img class="hinh-anh" src="img/cart.jpg"></td>
                                    <td class="reset">
                                        <p>Nike</p>
                                        <p style="color:#777">Mã SP: SP03</p>
                                        <p>x3</p>
                                    </td>
                                    <td style="text-align: center;padding-right:10px;font-size:20px;">29.999.997đ</td>
                                </tr>
                                <tr style="border-bottom: 2px solid #ccc">
                                    <td colspan="2" style="font-size:20px;"><button class="primary-btn" type="submit" href="#">Hủy đơn hàng</button>
                                    </td>
                                    <td style="text-align: center;font-size:30px;color:#f00">
                                        <p>29.999.997đ</p><br><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">#SP02</td>
                                    <td><img class="hinh-anh" src="img/cart.jpg"></td>
                                    <td class="reset">
                                        <p>Guma</p>
                                        <p style="color:#777">Mã SP: SP01</p>
                                        <p>x1</p>
                                    </td>
                                    <td style="text-align: center;padding-right:10px;font-size:20px">10.000.000đ</td>
                                </tr>
                                <tr style="border-bottom: 2px solid #ccc">
                                    <td colspan="2" style="font-size:20px;">
                                        <button class="primary-btn" type="submit" href="#">Hủy đơn hàng</button>
                                    </td>
                                    <td style="text-align: center;font-size:30px;color:#f00">
                                        <p>10.000.000đ</p><br><br>
                                    </td>
                                </tr>

                                <tr>
                                    <td rowspan="2">#SP03</td>
                                    <td><img class="hinh-anh" src="img/cart.jpg"></td>
                                    <td class="reset">
                                        <p>Gucci</p>
                                        <p style="color:#777">Mã SP: SP02</p>
                                        <p>x2</p>
                                    </td>
                                    <td style="text-align: center;padding-right:10px;font-size:20px">50.000.000đ</td>
                                </tr>
                                <tr style="border-bottom: 2px solid #ccc">
                                    <td colspan="2" style="font-size:20px;">
                                        <button class="primary-btn" type="submit" href="#">Hủy đơn hàng</button>
                                    </td>
                                    <td style="text-align: center;font-size:30px;color:#f00">
                                        <p>50.000.000đ</p><br><br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->
    <?php include 'layout/scriptspage.php'; ?>
</body>

</html>