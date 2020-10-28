<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Biz Online</title>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_css.php'?>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <header class="header-area header-wrapper">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php'?>
        </header>

        <div class="mobile-menu-area d-block d-lg-none section">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/menu.php'?>
        </div>

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80 section" style="padding-left:0px; padding-right:0px;">
            <div class="breadcrumbs overlay-bg" style="background: url('<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/custom/index-main01.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">사업자 메뉴</h1>
                                <ul class="breadcrumb-list">
                                    <li><a>Home</a></li>
                                    <li>Admin_menu</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <div id="page-content" class="page-wrapper section">

            <!-- BLOG SECTION START -->
            <div class="blog-section mb-50">
                <div class="container" style="max-width:1400px;">
                    <div class="row">
                        <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/company/left-menu.php'?>
                        <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/company/'.$_GET['dir'].'/'.$_GET['sub'].'.php'?>
                    </div>
                </div>
            </div>
            <!-- BLOG SECTION END -->
        </div>

        <!-- START FOOTER AREA -->
        <footer id="footer" class="footer-area section">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
        </footer>
        <!-- END FOOTER AREA -->

    </div>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
</body>

<script>

  <?php
    if(!isset($_SESSION)) session_start();
    if(isset($_SESSION['id']) && !strcmp($_SESSION['grade'],"company")){

    }
    else{
      echo "alert(\"로그인정보가 없거나, 접근권한이 없습니다.\");
            location.replace(\"/\")";
    }

  ?>
</script>

</html>
