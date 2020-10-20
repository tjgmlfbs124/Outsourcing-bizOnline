
<div class="col-lg-9 order-lg-2 order-1">
    <h3> 공지사항 </h3>
  <div aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <form id="signForm" method="POST" action="/form/updateNotice.php?id=<?php echo $_GET['id']?>" enctype="multipart/form-data">
              <div class="billing-details p-10">
                  <div class="row" style="margin:10px 0px 0px 0px;">
                      <div class="col-md-7">제목
                        <p style="margin:0px 0px 0px 0px;"> <input type="text" name="title" style="margin:0px;" required></p>
                      </div>

                      <div class="col-md-2">글쓴이
                        <p style="margin:0px 0px 0px 0px;"> <input type="text" name="writer" style="margin:0px;" required readonly></p>
                      </div>

                      <div class="col-md-3">날짜
                        <p style="margin:0px 0px 0px 0px;"> <input type="text" name="date" style="margin:0px;" required readonly></p>
                      </div>

                      <div class="col-md-12">
                        <p style="margin:10px 0px 0px 0px;">내용
                          <textarea type="text" style="margin:0px; height:300px; color:#999999;" name="content" required></textarea>
                        </p>
                      </div>
                  </div>
                  <input type="text" style="display:none;" name="adminid"/>
                  <div class="row">
                      <div class="col-md-6">
                          <input class="submit-btn-1 mt-20 btn-hover-1 f-right" type="submit" value="변경하기" style="cursor:pointer;" >
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- Javascript -->
<script>
  $( document ).ready(function() {
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
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $id = isset($_SESSION['adminid']) ? $_SESSION['adminid'] : false;
    if($id){
      $result = $api -> select_notice($_GET['id']);
      while ($row = $result ->fetch(PDO::FETCH_BOTH)){?>
      $("input[name=writer]").val("<?php echo $row['userid']?>");
      $("input[name=date]").val(getTimeStamp());
      $("input[name=adminid]").val("<?php echo $id ?>");
      $("input[name=title]").val("<?php echo $row['title'] ?>");
      $("textarea[name=content]").val(lineBreaker("<?php echo $row['content'] ?>"));
      <?php
      }
    }
    else{
       echo 'alert("회원정보가 없습니다. 다시 로그인해주세요."); location.replace("/pg/admin");';
    }
  ?>
</script>

</html>
