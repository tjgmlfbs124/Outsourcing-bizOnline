<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subas || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/css/custom.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/css/style-customizer.css">
    <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        <header class="header-area header-wrapper">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php'?>
        </header>
        <!-- END HEADER AREA -->

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80 section">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Login / Register</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <div id="page-content" class="page-wrapper section">

            <!-- LOGIN SECTION START -->
            <div class="login-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="registered-customers">
                                <!-- <form action="<?php $_SERVER['DOCUMENT_ROOT']?>/index.php"> -->
                                    <div class="login-account p-30 box-shadow">
                                        <p>Bz 몰에 오신것을 환영합니다.</p>
                                        <input type="text" name="name" placeholder="아이디">
                                        <input type="password" name="password" placeholder="패스워드">
                                        <p><small><a href="#">비밀번호 찾기</a></small></p>
                                        <button class="submit-btn-1 btn-hover-1" type="submit" onclick="location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/index.php'">login</button>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGIN SECTION END -->

        </div>
        <!-- End page content -->

        <footer id="footer" class="footer-area section">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
        </footer>
    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Popper js js -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/popper.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/bootstrap.min.js"></script>
    <!-- jquery.nivo.slider js -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/lib/js/jquery.nivo.slider.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/main.js"></script>

</body>

</html>
