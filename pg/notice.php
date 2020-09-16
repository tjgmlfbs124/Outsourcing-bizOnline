<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subas || Home</title>
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


          <div class="blog-section mb-50">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-9">
                      </div>


                      <div class="post-comments mb-60">
                          <h4 class="blog-section-title border-left mb-30">comments on this product</h4>
                          <!-- single-comments -->
                          <div class="media mt-30">
                              <div class="media-left pr-30">
                                  <a href="#"><img class="media-object" src="img/author/2.jpg" alt="#"></a>
                              </div>
                              <div class="media-body">
                                  <div class="clearfix">
                                      <div class="name-commenter f-left">
                                          <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                          <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                      </div>
                                      <ul class="reply-delate f-right">
                                          <li><a href="#">Reply</a></li>
                                          <li>/</li>
                                          <li><a href="#">Delate</a></li>
                                      </ul>
                                  </div>
                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.</p>
                              </div>
                          </div>
                          <!-- single-comments -->
                          <div class="media mt-30">
                              <div class="media-left pr-30">
                                  <a href="#"><img class="media-object" src="img/author/3.jpg" alt="#"></a>
                              </div>
                              <div class="media-body">
                                  <div class="clearfix">
                                      <div class="name-commenter f-left">
                                          <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                          <p class="mb-10">27 Jun, 2019 at 2:30pm</p>
                                      </div>
                                      <ul class="reply-delate f-right">
                                          <li><a href="#">Reply</a></li>
                                          <li>/</li>
                                          <li><a href="#">Delate</a></li>
                                      </ul>
                                  </div>
                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent  messages in con sectetur posuere dolor non.</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>

        <!-- START FOOTER AREA -->
        <footer id="footer" class="footer-area section">
          <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
        </footer>
        <!-- END FOOTER AREA -->

    </div>

    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
</body>

</html>
