<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <title>Trang Quản Trị</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


</head>
<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-etween align-items-center">
            <div class="brand-logo">
                <a href="login.php">
                    <img src="vendors/images/deskapp-logo.svg" alt="">
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="login.php">Đăng nhập</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/register-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="register-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <form action="xulydangky.php" method="POST" id="frmDangKy" class="tab-wizard2 wizard-circle wizard">
                                <h5>Đăng ký Nhân viên</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Địa chỉ Email*</label>
                                            <div class="col-sm-8">
                                                <input type="email"  id="email" name="email" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" placeholder="Địa chỉ Email" onfocus="this.placeholder = 'Địa chỉ Email'" onblur="this.placeholder = 'Địa chỉ Email'"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Tên đầy đủ*</label>
                                            <div class="col-sm-8">
                                                <input type="text" id="name" name="name" placeholder="Họ và tên" onfocus="this.placeholder = 'Họ và tên'" onblur="this.placeholder = 'Họ và tên'" class="form-control">
                                            <!-- <label class="col-sm-4 col-form-label">Nhập lại địa chỉ Email*</label>
                                            <div class="col-sm-8">
                                                <input type="email"  id="reemail" name="reemail" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" placeholder="Nhập lại địa chỉ Email" onfocus="this.placeholder = 'Nhập lại địa chỉ Email'" onblur="this.placeholder = 'Nhập lại địa chỉ Email'"  class="form-control"> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Mật khẩu*</label>
                                            <div class="col-sm-8">
                                                <input type="password" id="password" name="password" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Mật Khẩu" onfocus="this.placeholder = 'Mật Khẩu'" onblur="this.placeholder = 'Mật Khẩu'" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Xác nhận mật khẩu*</label>
                                            <div class="col-sm-8">
                                                <input type="password"  id="repassword" name="repassword" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Nhập Lại Mật Khẩu" onfocus="this.placeholder = 'Nhập Lại Mật Khẩu'" onblur="this.placeholder = 'Nhập Lại Mật Khẩu'" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="custom-control custom-checkbox mt-4">
                                <!-- <button type="submit" value="submit" class="primary-btn" id="btnDangKy">Đăng Ký</button> -->
                                </div>
                                <button type="submit" value="submit" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
                                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
                                  <div class="modal-content">
                                  <div class="modal-body text-center font-18">
                                   <h3 class="mb-20">Form Submitted!</h3>
                              <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          </div>
                           <div class="modal-footer justify-content-center">
                    <a href="xulydangky.php" class="btn btn-primary">Done</a>
                </div>
            </div>
        </div>
    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html Start -->
    
    
    <!-- success Popup html End -->
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>