<div class="container">
  <div class="row">
      <div class="col-lg-12">
          <div class="mobile-menu">
              <nav id="dropdown">
                  <ul>
                    <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/index.php?manufacturer=1">휴대폰 조회</a></li>
                    <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/store.php?carrier=0">견적 저장소</a></li>
                    <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/aboutus.php">고객센터</a></li>
                    <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/notice.php">공지사항</a></li>
                    <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/index.php">관리자</a></li>
                    <li id="logout" style="float:right; display:none;"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/form/logout.php">로그아웃</a></li>
                  </ul>
              </nav>
          </div>
      </div>
  </div>
</div>

<script>
  <?php
    if(isset($_SESSION['id'])){?>
      $("#logout").show();
    <?php
    }
    else{?>
      $("#logout").hide();
    <?php
    }
  ?>
</script>
