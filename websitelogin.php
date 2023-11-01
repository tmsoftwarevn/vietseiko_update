<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="public/images/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Login</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/feather.css" />
    <!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.min.css" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/magnific-popup.min.css" />
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/lc_lightbox.css" />
    <!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap-select.min.css" />
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="public/css/dataTables.bootstrap5.min.css" />
    <!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="public/css/select.bootstrap5.min.css" />
    <!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="public/css/dropzone.css" />
    <!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/scrollbar.css" />
    <!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/datepicker.css" />
    <!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/flaticon.css" />
    <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="public/css/swiper-bundle.min.css" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <!-- MAIN STYLE SHEET -->

    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/style2.css" />

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="public/css/skins-type/skin-6.css" />
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/switcher.css" />
</head>

<body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area" style="display: none">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- Login Section Start -->
            <div class="section-full site-bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                            <div class="twm-log-reg-media">
                                <div class="twm-l-media">
                                    <img src="images/login-bg.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-7">
                            <div class="twm-log-reg-form-wrap">
                                <div class="twm-log-reg-logo-head">
                                    <a href="index.html">
                                        <img src="images/logo-dark.png" alt="" class="logo" />
                                    </a>
                                </div>

                                <div class="twm-log-reg-inner">
                                    <div class="twm-log-reg-head">
                                        <div class="twm-log-reg-logo">
                                            <span class="log-reg-form-title">Log In</span>
                                        </div>
                                    </div>
                                    <div class="twm-tabs-style-2">
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <!--Login Candidate-->
                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#twm-login-candidate" type="button">
                                                    <i class="bi bi-person"></i></i>Ứng Viên
                                                </button>
                                            </li>
                                            <!--Login Employer-->
                                            <!-- <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#twm-login-Employer" type="button">
                                                    <i class="bi bi-building"></i>Nhà Tuyển Dụng
                                                </button>
                                            </li> -->
                                        </ul>

                                        <div class="tab-content" id="myTab2Content">
                                            <!--Login Candidate Content-->
                                            <div class="tab-pane fade show active" id="twm-login-candidate">
                                                <div class="row">
                                                    <form action="login.php" method="post" style="display: grid;">
                                                        <div class="form-group first">
                                                            <label for="username">Username</label>
                                                            <input type="text" value="" name="username" required id="username"/>
                                                        </div>
                                                        <div class="form-group first">
                                                            <label for="password">Password</label>
                                                            <input type="password" value="" name="password" required id="password"/>
                                                        </div>

                                                        <div class="remember">
                                                            <span class="checkbox1">
                                                                <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
                                                            </span>
                                                            <div class="forgot">
                                                                <h6><a href="register.php">Register me</a></h6>
                                                            </div>
                                                            <div class="clear"> </div>
                                                        </div>

                                                        <input type="submit" value="Login">
                                                    </form>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <span class="center-text-or">Or</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="log_with_facebook">
                                                                <i class="fab fa-facebook"></i>
                                                                Continue with Facebook
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="log_with_google">
                                                                <img src="images/google-icon.png" alt="" />
                                                                Continue with Google
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Login Employer Content-->
                                            <div class="tab-pane fade" id="twm-login-Employer">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="username" type="text" required="" class="form-control" placeholder="Usearname*" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="email" type="text" class="form-control" required="" placeholder="Password*" />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="twm-forgot-wrap">
                                                            <div class="form-group mb-3">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="Password4" />
                                                                    <label class="form-check-label rem-forgot" for="Password4">Remember me
                                                                        <a href="javascript:;" class="site-text-primary">Forgot
                                                                            Password</a></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="site-button">
                                                                Log in
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <span class="center-text-or">Or</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="log_with_facebook">
                                                                <i class="fab fa-facebook"></i>
                                                                Continue with Facebook
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="log_with_google">
                                                                <img src="images/google-icon.png" alt="" />
                                                                Continue with Google
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Section End -->
        </div>
        <!-- CONTENT END -->

        <?php
        require_once 'footer.php';
        ?>