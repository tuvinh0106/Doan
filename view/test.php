<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include 'layout/css.php'; ?>
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
                    <h1 style="font-family:Arial">Giỏ hàng</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <div class="cart-row">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col" style="text-align: center">Sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </div>
                        </thead>
                        <tbody>
                            <div class="cart-items">
                                <tr>
                                    <td>
                                        <h5>1</h5>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/cart.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>Minimalistic shop for multipurpose use</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <span class="cart-price cart-column">25000đ</span>
                                    </td>
                                    <td>
                                        <div class="cart-quantity cart-column">
                                            <input class="cart-quantity-input" type="number" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <a id="delete_1" data-sp-ma="2" class="btn btn-warning btn-delete-sanpham">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                        </a>
                                    </td>
                                </tr>
                            </div>
                            <div>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <div class="cart-total">
                                        <td>
                                            <strong class="cart-total-title">Tổng Cộng:</strong>

                                        </td>
                                        <td>
                                            <span class="cart-total-price">VNĐ</span>
                                        </td>
                                    </div>
                                </tr>
                            </div>
                            <tr class="out_button_area">
                                <td colspan="6">
                                    <div class="checkout_btn_inner d-flex align-items-center" style="margin-left:550px">
                                        <a class="gray_btn" href="index.php">Tiếp tục mua sắm</a>
                                        <a class="primary-btn" href="thanhtoan.php">Tiến hành thanh toán</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->
    <?php include 'layout/scriptspage.php'; ?>
</body>

</html>