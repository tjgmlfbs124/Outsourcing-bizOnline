
<div class="col-lg-9 order-lg-2 order-1">
    <div class="tab-content">
       <div class="tab-pane active" id="checkout">
          <div class="checkout-content box-shadow p-30">
             <div class="row">
                <div class="col-lg-12" >
                   <div class="product-tab pro-tab-menu pro-tab-menu-2 text-left" style="justify-content:flex-end;">
                      <!-- Nav tabs -->
                      <ul id="menu-list" class="nav" style="color:#555;">
                         <li><a data-toggle="tab" onclick="onPage(0)" data-request="0" style="cursor:pointer;">전체</a></li>
                         <li><a data-toggle="tab" onclick="onPage(1)" data-request="1" style="cursor:pointer;">승인 확인</a></li>
                         <li><a data-toggle="tab" onclick="onPage(2)" data-request="2" style="cursor:pointer;">승인 미확인</a></li>
                      </ul>
                   </div>
                </div>
                <div class="col-lg-12" >
                   <div id="company-list" class="blog-details-area">


                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
<!-- Javascript -->
<script>
  // 통신사 탭메뉴에 하이라이트
  menuHighlight("<?php echo $_GET['request']?>");

  function menuHighlight(carrier){
    var menu = ($("a[data-request="+carrier+"]")[0]);
    menu.classList.add("active");
  }

  function onPage(index){
    location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/menu.php?dir=user&sub=userList&request=" + index
  }

  function addItem(id, name, userid, approval, code, phone){
    var temp = "", str = "";
    if(isApproval(approval)) temp = "승인";
    else temp = "미승인";
    str = "" +
    "<div class=\"media author-post box-shadow mb-60\" style=\"margin-bottom:30px; style=\"cursor:pointer;\">"+
       "<div class=\"media-body\">"+
          "<div class=\"clearfix\">"+
             "<div class=\"name-commenter f-left\">"+
                "<h6 class=\"media-heading\"><a href=\"#\">"+name+" (" + userid +  ")</a></h6>"+
                "<p class=\"mb-10\">상태 : " + temp + "</p>"+
             "</div>"+
             "<ul class=\"reply-delate f-right\">";

            if(!approval) str = str + "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/form/updateUserRequest.php?id="+id+"\">승인</a></li>"+
                                      "<li><a>&nbsp|&nbsp</a></li>";
            str = str + "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/form/deleteUserRequest.php?id="+ id + "\">삭제</a></li>"+
          "</div>"+
          "<p class=\"mb-0\">연락처 : "+phone+"&nbsp&nbsp|&nbsp&nbsp추천인코드 : " + code + "</p>"+
       "</div>"+
    "</div>";

    return str;
  }
  function isApproval(date){
    if(date) return true;
    else return false;
  }
  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $id = isset($_SESSION['adminid']) ? $_SESSION['adminid'] : false;
    if($id){
      $result = $api -> select_users($_GET['request']);
      while ($row = $result ->fetch(PDO::FETCH_BOTH)){?>
        $("#company-list").append(addItem(
          "<?php echo $row['_id']?>",
          "<?php echo $row['name']?>",
          "<?php echo $row['userid']?>",
          "<?php echo $row['approval_date']?>",
          "<?php echo $row['recommender']?>",
          "<?php echo $row['phone']?>"
        ));
      <?php
      }
    }
    else{
       echo 'alert("회원정보가 없습니다. 다시 로그인해주세요."); location.replace("/pg/admin");';
    }
  ?>

</script>

</html>
