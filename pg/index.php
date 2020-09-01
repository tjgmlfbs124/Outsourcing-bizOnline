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
        <header class="header-area header-wrapper">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php'?>
        </header>

        <div class="mobile-menu-area d-block d-lg-none section">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/menu.php'?>
        </div>

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80 section">
            <div class="breadcrumbs overlay-bg" style="background: url('<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/custom/index-main01.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Product Tab Style -2</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li>All Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper section">
            <div class="mb-80">
            <!-- PRODUCT TAB SECTION START -->
            <div class="product-tab-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">상품리스트</h2>
                                <h6>Biz Online's applicable products.</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-tab pro-tab-menu pro-tab-menu-2 text-right">
                                <!-- Nav tabs -->
                                <ul class="nav">
                                    <li><a class="active" href="#popular-product" data-toggle="tab">알뜰폰</a></li>
                                    <li><a href="#new-arrival" data-toggle="tab">SKT</a></li>
                                    <li><a href="#best-seller" data-toggle="tab">KT</a></li>
                                    <li><a href="#special-offer" data-toggle="tab">LG U+</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="popular-product" class="tab-pane active show">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">갤럭시 노트20 울트라 5G</a>
                                            </h6>
                                            <h6 class="brand-name">256GB</h6>
                                            <h3 class="pro-price">1,560,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">갤럭시 노트20 5G</a>
                                            </h6>
                                            <h6 class="brand-name">256G</h6>
                                            <h3 class="pro-price">1,280,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">갤럭시 A21s</a>
                                            </h6>
                                            <h6 class="brand-name">32G</h6>
                                            <h3 class="pro-price">850,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">갤럭시 A 퀀텀 5G</a>
                                            </h6>
                                            <h6 class="brand-name">128G</h6>
                                            <h3 class="pro-price">1,350,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/7.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">LG Q92 5G</a>
                                            </h6>
                                            <h6 class="brand-name">128G</h6>
                                            <h3 class="pro-price">2,100,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/8.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">LG Q61</a>
                                            </h6>
                                            <h6 class="brand-name">64G</h6>
                                            <h3 class="pro-price">1,280,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/9.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">LG 벨벳 5G</a>
                                            </h6>
                                            <h6 class="brand-name">128G</h6>
                                            <h3 class="pro-price">980,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/10.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">LG폴더2</a>
                                            </h6>
                                            <h6 class="brand-name">8G</h6>
                                            <h3 class="pro-price">280,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/11.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">아이폰 SE(2020)</a>
                                            </h6>
                                            <h6 class="brand-name">64G | 128G | 256G</h6>
                                            <h3 class="pro-price">2,100,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/12.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">아이폰 11</a>
                                            </h6>
                                            <h6 class="brand-name">64G | 128G | 256G</h6>
                                            <h3 class="pro-price">1,680,000/h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">아이폰 11 PRO</a>
                                            </h6>
                                            <h6 class="brand-name">64G | 256G | 512G</h6>
                                            <h3 class="pro-price">2,560,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product-item product-item-2">
                                        <div class="product-img">
                                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">
                                                <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/phoneModel/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item.php">아이폰 XR</a>
                                            </h6>
                                            <h6 class="brand-name">64G | 128G | 256G</h6>
                                            <h3 class="pro-price">2,280,000</h3>
                                        </div>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT TAB SECTION END -->

            </div>
        </section>
        <!-- End page content -->

        <!-- START FOOTER AREA -->
        <footer id="footer" class="footer-area section">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
        </footer>
        <!-- END FOOTER AREA -->

        <!-- START QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product clearfix">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/img/product/quickview.jpg">
                                    </div>
                                </div><!-- .product-images -->

                                <div class="product-info">
                                    <h1>Aenean eu tristique</h1>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="new-price">£160.00</span>
                                            <span class="old-price">£190.00</span>
                                        </div>
                                    </div>
                                    <a href="single-product-left-sidebar.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons clearfix">
                                                <li>
                                                    <a class="facebook" href="#" target="_blank" title="Facebook">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="google-plus" href="#" target="_blank" title="Google +">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" target="_blank" title="Twitter">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="rss" href="#" target="_blank" title="RSS">
                                                        <i class="zmdi zmdi-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->
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
