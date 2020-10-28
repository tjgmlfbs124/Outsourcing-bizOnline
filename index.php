<!doctype html>

<?php if(!isset($_SESSION)) session_start(); ?>
<html class="no-js" lang="en">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Biz Online</title>
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
            <div class="header-top-bar plr-185">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 d-none d-md-block">
                          <div class="call-us">
                              <p class="mb-0 roboto">Biz Online</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </header>
          <!-- END HEADER AREA -->

          <!-- BREADCRUMBS SETCTION START -->
          <div class="breadcrumbs-section plr-200 mb-80 section">
              <div class="breadcrumbs overlay-bg" style="background: url('<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/custom/index-main01.jpg')">
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
                                  <form id="signForm"method="POST" action="/form/signin.php" enctype="multipart/form-data">
                                      <div class="login-account p-30 box-shadow">
                                          <p>Bz 몰에 오신것을 환영합니다.</p>
                                          <input type="text" name="id" placeholder="아이디" style="margin:10px 0px 0px 0px;" required>
                                          <input type="password" name="password" placeholder="패스워드" style="margin:10px 0px 0px 0px;" required>
                                          <p style="margin:20px 0px 0px 0px;">회원 구분</p>
                                          <select name="grade" class="custom-select" data-name="저장용량" style="margin:0px 0px 0px 0px; max-width:100px;" required>
                                            <option value="default">선택</option>
                                            <option value="user">고객</option>
                                            <option value="company">사업자</option>
                                            <option value="manager">관리자</option>
                                          </select>

                                          <p style="margin-top:30px;">
                                            <small><a href="/pg/signup.php">회원가입</a></small>
                                            <!-- <small><a>&nbsp|&nbsp</a></small>
                                            <small><a href="#">비밀번호 찾기</a></small> -->
                                          </p>
                                          <button class="submit-btn-1 btn-hover-1" type="submit"style="cursor:pointer;">로그인</button>
                                      </div>
                                  </form>
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

      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
  </body>

  <script>
      <?php
        if(isset($_SESSION['id'])){?>
          location.replace("/pg/index.php?manufacturer=1");
        <?php
        }
        else{

        }

       ?>
    $(function() {
        $("#signForm").validate();
        $.extend($.validator.messages, {
          required: "필수 항목입니다.",
          remote: "항목을 수정하세요.",
          email: "유효하지 않은 E-Mail주소입니다.",
          url: "유효하지 않은 URL입니다.",
          date: "올바른 날짜를 입력하세요.",
          dateISO: "올바른 날짜(ISO)를 입력하세요.",
          number: "유효한 숫자가 아닙니다.",
          digits: "숫자만 입력 가능합니다.",
          creditcard: "신용카드 번호가 바르지 않습니다.",
          equalTo: "같은 값을 다시 입력하세요.",
          extension: "올바른 확장자가 아닙니다.",
          maxlength: $.validator.format( "{0}자를 넘을 수 없습니다. " ),
          minlength: $.validator.format( "{0}자 이상 입력하세요." ),
          rangelength: $.validator.format( "문자 길이가 {0} 에서 {1} 사이의 값을 입력하세요." ),
          range: $.validator.format( "{0} 에서 {1} 사이의 값을 입력하세요." ),
          max: $.validator.format( "{0} 이하의 값을 입력하세요." ),
          min: $.validator.format( "{0} 이상의 값을 입력하세요." )
      });
    });

  </script>
</html>
