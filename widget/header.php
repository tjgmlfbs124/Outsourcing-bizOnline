<?php if(!isset($_SESSION)) session_start(); ?>

<!-- header-top-bar -->
<div class="header-top-bar plr-185">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-none d-md-block">
                <div class="call-us">
                    <p class="mb-0 roboto">(+88) 01234-567890</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-middle-area -->
<div id="sticky-header" class="header-middle-area plr-185">
    <div class="container-fluid">
        <div class="full-width-mega-dropdown">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-2 col-md-4">
                    <div class="logo">
                        <a href="/">
                            <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/img/logo/logo.png" alt="main logo">
                        </a>
                    </div>
                </div>
                <!-- primary-menu -->
                <div class="col-lg-8 d-none d-lg-block">
                    <nav id="primary-menu">
                        <ul class="main-menu text-center">
                            <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/index.php?manufacturer=1">휴대폰 조회</a></li>
                            <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/store.php?carrier=0">견적 저장소</a></li>
                            <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/aboutus.php">고객센터</a></li>
                            <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/notice.php">공지사항</a></li>
                            <li id="manager" style="display:none;"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/index.php">관리자</a></li>
                            <li id="company" style="display:none;"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/company/index.php">사업자</a></li>
                            <li id="logout" style="float:right; display:none;"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/form/logout.php">로그아웃</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/vendor/jquery-3.1.1.min.js"></script>
<script>
  <?php
    if(isset($_SESSION['id'])){?>
      console.log("<?php echo $_SESSION['grade']?>")
      $("#logout").show();
      $("#" + "<?php echo $_SESSION['grade']?>").show();
    <?php
    }
    else{?>
      $("#" + "<?php echo $_SESSION['grade']?>").hide();
      $("#logout").hide();
    <?php
    }
  ?>
</script>
