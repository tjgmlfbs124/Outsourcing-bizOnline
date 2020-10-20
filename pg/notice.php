<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Biz Online</title>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_css.php'?>
</head>
<style>
  .media:hover {
    background-color:#f6f6f6;
  }
</style>
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
                                <h1 class="breadcrumbs-title">공지사항</h1>
                                <ul class="breadcrumb-list">
                                    <li><a>Home</a></li>
                                    <li>Notice</li>
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
                      <div id="notice-list" class="post-comments mb-60" style="width:100%;">
                          <h4 class="blog-section-title border-left mb-30">공지사항</h4>
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

<script>
  function addNotice(id, title, writer, date){
      $("#notice-list").append(""+
      "<div class=\"media mt-30\" style=\"border-bottom:1px solid #ccc; cursor:pointer;\" onclick=\"location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/noticeInfo.php?id=" + id + "'\">"+
          "<div class=\"media-body\">"+
              "<div class=\"clearfix\">"+
                  "<div class=\"name-commenter f-left\">"+
                      "<h6 class=\"media-heading\"><a href=\"#\">"+title+"</a></h6>"+
                      "<p class=\"mb-10\" >등록일 : " + date + "</p>"+
                  "</div>"+
                  "<ul class=\"reply-delate f-right\">"+
                      "<li><a style=\"color:#777;\">" + writer + "</a></li>"+
                  "</ul>"+
              "</div>"+
          "</div>"+
      "</div>"
    );
  }
  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
      $result = $api -> select_notices();
      while ($row = $result ->fetch(PDO::FETCH_BOTH)){?>
        addNotice(
          "<?php echo $row['_id'] ?>",
          "<?php echo $row['title'] ?>",
          "<?php echo $row['name'] ?>",
          "<?php echo $row['date'] ?>"
        );
      <?php
    }
  ?>
</script>
</html>
