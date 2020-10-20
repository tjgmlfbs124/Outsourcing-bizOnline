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
                                <h1 class="breadcrumbs-title">비즈온라인에 오신것을 환영합니다.</h1>
                                <ul class="breadcrumb-list">
                                    <li>Home</li>
                                    <li>Sign up</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="page-content" class="page-wrapper section">

            <!-- LOGIN SECTION START -->
            <div class="login-section mb-80">
                <div class="container">
                    <div class="row box-shadow">
                        <div class="col-lg-12">
                          <div aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                  <form id="signForm" method="POST" action="/form/signup.php" enctype="multipart/form-data">
                                      <div class="billing-details p-30">
                                          <div class="row">
                                              <div class="col-md-4">
                                                <div class="imgs-zoom-area">
                                                   <img id="profileImg" src="/image/phone/default.png" alt="">
                                                   <input type="file" name="fileToUpload" id="fileToUpload" style="display:none;">
                                                   <a onclick="updateToImage()" style="cursor:pointer;">여기를 클릭해서 사진을 등록하세요.</a>
                                                </div>

                                              </div>
                                              <div class="col-md-6">
                                                <p style="margin:0px 0px 0px 0px;">아이디 <input type="text" name="id" id="id" style="margin:0px;" required minlength="5"></p>
                                                <p style="margin:20px 0px 0px 0px;">패스워드 <input type="password" name="password" style="margin:0px;" required minlength="6"></p>
                                                <p style="margin:20px 0px 0px 0px;">이름 <input type="text" placeholder="" name="aaa"  style="margin:0px;" required minlength="2"></p>
                                                <p style="margin:20px 0px 0px 0px;">휴대폰번호 <input type="number" placeholder="" name="phone" style="margin:0px;" required digits="true" minlength="8"></p>
                                                <p style="margin:20px 0px 0px 0px;" >추천인코드 <input type="text" placeholder="" name="recommender" style="margin:0px;" required maxlength="5"></p>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <input class="submit-btn-1 mt-20 btn-hover-1 f-right" type="submit" value="가입신청" style="cursor:pointer;">
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
            <!-- LOGIN SECTION END -->
        </div>
    </div>

    <footer id="footer" class="footer-area section">
       <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
    </footer>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/popper.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/lib/js/jquery.nivo.slider.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/plugins.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/main.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/Items/items.js"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/bz_online.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js" ></script>

</body>

<!-- Javascript -->
<script>
  // input form 유효성 검사
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

  var target = document.getElementById('fileToUpload');

  function updateToImage(){
      jQuery("#fileToUpload").click();
  }

  function imagePreView(target, callback){
    var img = new Image();
    target.onchange = function (e) {
      e.preventDefault();
      var file = target.files[0], reader = new FileReader();
      reader.onload = function (event) {
        img.src = event.target.result;
        img.width = 220;
        img.height = 220;
        img.id="profileImg";
      };
      reader.readAsDataURL(file);
      callback(img);
    };
  }


  imagePreView(target, function(img){
    $("#profileImg").replaceWith(img);
  });

  //TODO 유효성 검사 로직 만들것.


</script>

</html>
