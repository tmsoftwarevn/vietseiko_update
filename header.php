
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<div class="page-wraper">
    <!-- HEADER START -->
    <header class="site-header header-style-3 mobile-sider-drawer-menu">
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar">
                <div class="container clearfix ">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="trang-chu">
                                <img src="public/images/logo.png" alt="" />
                            </a>
                        </div>
                    </div>

                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse " style="display: block;">

                        <ul class="nav navbar-nav " style="margin: 0 auto;">
                            <a href="trang-chu">
                                <div class="d-flex justify-content-center logo-mobile-f">
                                    <img src="public/images/logo.png" alt="logo" width="150px" height="150px" />
                                </div>
                            </a>
                            <li class="has-child">
                                <!-- <a href="gioi-thieu">Giới Thiệu</a> -->
                                <a href="gioi-thieu"><?= __('Giới thiệu') ?></a>
                            </li>
                            <li class="has-child">
                                <a href="javascript:;"><?= __('Việc làm') ?></a>
                                <ul class="sub-menu" style="width: 270px;">
                                    <li style="cursor: pointer;"> <a href="/viec-lam-tai-viet-nam"><?= __('Việc làm tại Việt Nam - Headhunter') ?></a></li>
                                    <li style="cursor: pointer;"><a href="/viec-lam-xkld-nhat-ban"><?= __('Xuất khẩu lao động Nhật Bản') ?></a></li>
                                    <li style="cursor: pointer;"><a href="/viec-lam-ky-su-va-thong-dich-nhat-ban"><?= __('Kỹ sư & thông dịch viên tại Nhật Bản') ?></a></li>
                                    <li style="cursor: pointer;"><a href="/viec-lam-tai-vietseiko"><?= __('Việc làm tại Vietseiko') ?></a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <a href="javascript:;" ;><?= __('Công cụ') ?></a>
                                <ul class="sub-menu" style="width: 270px;">
                                    <li style="cursor: pointer;"><a href="cam-nang"><?= __('Cẩm nang nghề nghiệp') ?></a></li>
                                    <li style="cursor: pointer;"><a href="tinh-luong-gross-net"><?= __('Tính lương Gross sang Net') ?></a></li>
                                </ul>
                            </li>
                            <li class="has-child">
                                <a href="tin-tuc"><?= __('Tin tức') ?></a>
                            </li>


                            <li class="has-child">
                                <a href="javascript:;" ;><?= __('Liên hệ') ?></a>
                                <ul class="sub-menu" style="width: 270px;">
                                    <li style="cursor: pointer;"><a href="lien-he-ung-vien"><?= __('Ứng viên') ?></a></li>
                                    <li style="cursor: pointer;"><a href="lien-he-nha-tuyen-dung"><?= __('Nhà tuyển dụng') ?></a></li>
                                    <li style="cursor: pointer;"><a href="lien-he-khac"><?= __('Khác') ?></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Header Right Section-->
                    <div class="extra-nav header-2-nav">

                        <div class="extra-cell">
                            <div class="header-nav-btn-section">

                                <!-- Chuyển đổi ngôn ngữ -->
                                <a href="?lang=jp">
                                    <span style="font-size: 20px; margin-right: 5px;  border: 1px solid #bdc3c7;" class="fi fi-jp"></span>
                                </a>
                                <a href="?lang=vn">
                                    <span style="font-size: 20px;" class="fi fi-vn"></span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </header>
</div>


<div class="icon-zalo">
    <a href="https://zalo.me/2635801961745424279" target="_blank">
        <img src="https://page.widget.zalo.me/static/images/2.0/Logo.svg" />
    </a>

</div>

<!-- // đoaạn code run message -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
<script>
    document.cookie = "width = " + window.innerWidth
</script>
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "608369259596065");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v18.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>