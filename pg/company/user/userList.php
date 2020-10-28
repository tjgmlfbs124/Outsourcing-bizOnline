
<div class="col-lg-9 order-lg-2 order-1">
    <div class="tab-content">
       <div class="tab-pane active" id="checkout">
          <div class="checkout-content box-shadow p-30">
             <div class="row">
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
    if(!isset($_SESSION)) session_start();
		if(isset($_SESSION['id']) && !strcmp($_SESSION['grade'],"company")){
      require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
      $api = new getForm();
      $result = $api -> select_user_with_code($_SESSION['id']);
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
      echo "alert(\"로그인정보가 없습니다.로그인화면으로 이동합니다.\");
            location.replace(\"/\")";
    }
  ?>

</script>

</html>
