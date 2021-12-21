<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include 'layout/css.php'; ?>
</head>

<body id="category">

    <!-- Start Header Area -->
    <?php include 'layout/headerpage.php'; ?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1 style="font-family:Arial">Nike</h1>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Tùy Chọn</option>
                            <option value="1">Giá từ thấp tới cao</option>
                            <option value="1">Giá từ cao tới thấp</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <?php
                        for ($i = 1; $i < 9; $i++) {
                            echo '<div class="col-lg-3 col-md-6">';
                            echo '<div class="single-product">';
                            echo '<img class="img-fluid" src="img/product/p2.jpg" alt="">';
                            echo '<div class="product-details">';
                            echo '    <h6>addidas New Hammer sole';
                            echo '        for Sports person</h6>';
                            echo '    <div class="price">';
                            echo '        <h6>$150.00</h6>';
                            echo '        <h6 class="l-through">$210.00</h6>';
                            echo '    </div>';
                            echo '    <div class="prd-bottom">';
                            echo '       <a href="" class="social-info">';
                            echo '            <span class="ti-bag"></span>';
                            echo '            <p class="hover-text">thêm</p>';
                            echo '        </a>';
                            echo '        <a href="chitietsanpham.php" class="social-info">';
                            echo '            <span class="lnr lnr-move"></span>';
                            echo '            <p class="hover-text">xem chi tiết</p>';
                            echo '        </a>';
                            echo '    </div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Tùy Chọn</option>
                            <option value="1">Giá từ thấp tới cao</option>
                            <option value="1">Giá từ cao tới thấp</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>

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