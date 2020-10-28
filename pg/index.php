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
                                <h1 class="breadcrumbs-title">휴대폰 조회</h1>
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
                                <ul id="menu-list"class="nav">

                                    <li><a data-toggle="tab" onclick='location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/index.php?manufacturer=1"' style="cursor:pointer;">삼성</a></li>
                                    <li><a data-toggle="tab" onclick='location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/index.php?manufacturer=2"'style="cursor:pointer;">애플</a></li>
                                    <li><a data-toggle="tab" onclick='location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/index.php?manufacturer=3"'style="cursor:pointer;">LG</a></li>
                                    <li><a data-toggle="tab" onclick='location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/index.php?manufacturer=999"' style="cursor:pointer;">기타</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="popular-product" class="tab-pane active show">
                            <div id="device-list" class="row">

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

    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
</body>

<!-- Javascript -->
<script>
  function addItem(id, name, model, date, storage, manufacturer, url){
    var html =
      "<div class=\"col-lg-3 col-md-4\">"+
      	"<div class=\"product-item product-item-2\">"+
      		"<div class=\"product-img\">"+
      			"<a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v3.php?id="+ id + "&carrier=1\">"+
      				"<img src=\"<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/"+model+"/thumnail.jpg\" alt=\"\" />"+
      			"</a>"+
      		"</div>"+
      		"<div class=\"product-info\">"+
      			"<h6 class=\"product-title\">"+
      				"<a  href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v3.php?id="+ id + "&carrier=1\">" + name + "</a>"+
      			"</h6>"+
      			"<h6 class=\"brand-name\">출시 : " + date + "</h6>"+
      			"<h5 class=\"pro-price\">" + storage + "</h5>"+
      		"</div>"+
      		"<ul class=\"action-button\">"+
      			"<li>"+
      				"<a href=\"#\" title=\"Wishlist\"><i class=\"zmdi zmdi-favorite\"></i></a>"+
      			"</li>"+
      		"</ul>"+
      	"</div>"+
      "</div>";
    return html;
  }

  // 반환받은 용량(string)에서 ','를 떼서 String으로 반환
  function separator(storage){
    var storages = storage.split(",");
    storages.sort();
    if(storages.lengh <= 1) return storages[0];
    else return storages.join(' | ');
  }

  function menuHighlight(){
    var menu = $("#menu-list").children();
    children = menu[<?php echo $_GET['manufacturer']-1?>];
    children.classList.add("active");
  }

  menuHighlight();
</script>


<!-- PHP -->
<script>
  <?php
    if(!isset($_SESSION)) session_start();
		if(isset($_SESSION['id'])){
      require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
      $api = new getForm();
      $items = $api -> select_items($_GET['manufacturer']);

      while ($row = $items->fetch(PDO::FETCH_BOTH)){?>
        $("#device-list").append(addItem(
          "<?php echo $row['_id'] ?>",
          "<?php echo $row['name'] ?>",
          "<?php echo $row['model'] ?>",
          "<?php echo $row['release'] ?>",
          separator("<?php echo $row['storage'] ?>"),
          "<?php echo $row['manufacturer_id'] ?>",
          "<?php echo $row['image_url'] ?>"
        ));
      <?php }
    }
    else{
      echo "alert(\"로그인정보가 없습니다.로그인화면으로 이동합니다.\");
            location.replace(\"/\")";
    }
  ?>
</script>

</html>
