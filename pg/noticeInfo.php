<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Biz Online</title>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_css.php'?>
</head>
<style>
  p : {
    font-size : 126px;
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
                    <div class="col-lg-12 order-lg-2 order-1">
                      <div aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                              <form id="signForm" method="POST" action="/form/addNotice.php" enctype="multipart/form-data">
                                  <div class="billing-details p-10">
                                      <div class="row" style="margin:10px 0px 0px 0px;">
                                          <div class="col-md-7">
                                            <p style="margin:0px 0px 0px 0px;">
                                              <input type="text" name="title" style="margin:0px; box-shadow:none;" disabled>
                                            </p>
                                          </div>

                                          <div class="col-md-2">
                                            <p style="margin:0px 0px 0px 0px;"> <input type="text" name="writer" style="margin:0px; box-shadow:none;" disabled></p>
                                          </div>

                                          <div class="col-md-3">
                                            <p style="margin:0px 0px 0px 0px;"> <input type="text" name="date" style="margin:0px; box-shadow:none;" disabled></p>
                                          </div>
                                          <div class="col-md-12" style="border-top:1px solid #aaa; margin:10px 0px 10px 0px;"></div>
                                          <div class="col-md-12">
                                            <p style="margin:10px 0px 0px 0px;">
                                              <textarea type="text" style="margin:0px; height:300px; color:#999999;" name="content" disabled></textarea>
                                            </p>
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
    function lineBreaker(str){
      return str.replace(/<br>/g, "\n");
    }

    function getTimeStamp() {
      var d = new Date();
      var s =
        leadingZeros(d.getFullYear(), 4) + '-' +
        leadingZeros(d.getMonth() + 1, 2) + '-' +
        leadingZeros(d.getDate(), 2) + ' ' +
        leadingZeros(d.getHours(), 2) + ':' +
        leadingZeros(d.getMinutes(), 2) + ':' +
        leadingZeros(d.getSeconds(), 2);
      return s;
    }

    function leadingZeros(n, digits) {
      var zero = '';
      n = n.toString();
      if (n.length < digits) {
        for (i = 0; i < digits - n.length; i++)
          zero += '0';
      }
      return zero + n;
    }

    <?php
      if(!isset($_SESSION)) session_start();
  		if(isset($_SESSION['id'])){
        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $result = $api -> select_notice($_GET['id']);
        while ($row = $result ->fetch(PDO::FETCH_BOTH)){?>
        $("input[name=writer]").val("글쓴이 : <?php echo $row['userid']?>");
        $("input[name=date]").val("등록일 : " + getTimeStamp());
        $("input[name=adminid]").val("<?php echo $id ?>");
        $("input[name=title]").val("제목 : <?php echo $row['title'] ?>");
        $("textarea[name=content]").val(lineBreaker("<?php echo $row['content'] ?>"));
        <?php
        }
      }
      else{
        echo "alert(\"로그인정보가 없습니다.로그인화면으로 이동합니다.\");
              location.replace(\"/\")";
      }
    ?>
</script>
</html>
