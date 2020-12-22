
<div class="col-lg-9 order-lg-2 order-1">
    <h3> 사업자 추가 </h3>
  <div aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <form id="signForm" method="POST" action="/form/addCompany.php" enctype="multipart/form-data">
              <div class="billing-details p-10">
                  <div class="row" style="margin:10px 0px 0px 0px;">
                      <!-- 기본정보 -->
                      <div class="col-md-12">
                        <h4 style="margin:20px 0px 10px 0px;">기본정보</h4>
                      </div>
                      <div class="col-md-4">
                        <p style="margin:0px 0px 0px 0px;">성함 <input type="text" name="name" style="margin:0px;" required></p>
                      </div>
                      <div class="col-md-4">
                        <p style="margin:0px 0px 0px 0px;">소속<input type="text" name="company" style="margin:0px;" required></p>
                      </div>
                      <div class="col-md-4">
                        <p style="margin:0px 0px 0px 0px;">연락처 <input type="number" name="phone" style="margin:0px;" required digits="true"></p>
                      </div>

                      <!-- 회원 정보 -->
                      <div class="col-md-12">
                        <h4 style="margin:20px 0px 00px 0px;">회원정보</h4>
                      </div>
                      <div class="col-md-5">
                        <p style="margin:10px 0px 0px 0px;">아이디<input type="text" style="margin:0px;" name="id" required></p>
                      </div>
                      <div class="col-md-5">
                        <p style="margin:10px 0px 0px 0px;">비밀번호
                          <input type="password" style="margin:0px;" name="password" required minlength="8"></p>
                        </p>
                      </div>
                      <div class="col-md-2">
                        <p style="margin:10px 0px 0px 0px;">등급
                          <select class="custom-select" name="grade" required>
                            <option value="default">선택 </option>
                            <option value="0">관리자 </option>
                            <option value="1">사업자 </option>
                          </select>
                          <!-- <input type="text" name="manufacturer" value="" style="display:none;"/> -->
                        </p>
                      </div>

                      <!-- 회원 정보 -->
                      <div class="col-md-12">
                        <h4 style="margin:20px 0px 0px 0px;">추천인코드 생성</h4>
                      </div>
                      <div class="col-md-5">
                        <p style="margin:10px 0px 0px 0px;">코드
                          <input type="text" style="margin:0px;" name="code" required maxlength="5" minlength="4" placeholder="5자의 영어와 숫자">
                        </p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <input class="submit-btn-1 mt-20 btn-hover-1 f-right" type="submit" value="등록하기" style="cursor:pointer;" >
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
</script>

</html>
