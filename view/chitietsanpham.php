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
                    <h1 style="font-family:Arial">Chi Tiết Sản Phẩm</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_Product_carousel">
                        <div class="single-prd-item">
                            <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                        </div>
                        <div class="single-prd-item">
                            <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                        </div>
                        <div class="single-prd-item">
                            <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <form action="xulygiohang.php" method="post" class="cart">
                            <h3>Faded SkyBlu Denim Jeans</h3>
                            <h2>$149.99</h2>
                            <ul class="list">
                                <li><a class="active" href="#"><span>Loại</span> : Household</a></li>
                                <li><a><span>Thương Hiệu</span> : Nike</a></li>
                                <li><a><span>Bảo Hành</span> : 6 Tháng</a></li>
                                <li><a><span>Tình trạng</span> : Còn hàng</a></li>
                            </ul>
                            <p>Mô Tả</p>
                            <div class="product_count">
                                <label for="qty">Số Lượng</label>
                                <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>

                            <div class="card_area d-flex align-items-center">
                                <a class="primary-btn" href="#">Thêm giỏ hàng</a>
                                <a class="primary-btn" href="#">Thanh toán</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <section class="product_description_area">
    </section>

    <!-- Start related-product Area -->
    <section class="related-product-area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1 style="font-family:Arial">Ưu Đãi Trong Tuần</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <?php
                        for ($i = 1; $i < 5; $i++) {
                            echo '<div class="col-lg-3 col-md-6">';
                            echo '<div class="single-product">';
                            echo '    <img class="img-fluid" src="img/product/p1.jpg" alt="">';
                            echo '    <div class="product-details">';
                            echo '        <h6>addidas New Hammer sole';
                            echo '            for Sports person</h6>';
                            echo '        <div class="price">';
                            echo '            <h6>$150.00</h6>';
                            echo '            <h6 class="l-through">$210.00</h6>';
                            echo '        </div>';
                            echo '        <div class="prd-bottom">';
                            echo '            <a href="giohang.php" class="social-info">';
                            echo '                <span class="ti-bag"></span>';
                            echo '                <p class="hover-text">thêm vào</p>';
                            echo '            </a>';
                            echo '            <a href="chitietsanpham.php" class="social-info">';
                            echo '                <span class="lnr lnr-move"></span>';
                            echo '                <p class="hover-text">xem chi tiết</p>';
                            echo '            </a>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End related-product Area -->

    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->

    <?php include 'layout/scriptspage.php'; ?>
</body>

</html>