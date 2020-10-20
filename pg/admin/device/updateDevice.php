
<div class="col-lg-9 order-lg-2 order-1">
    <h3 style="margin-bottom:20px;"> 요금제 변경 </h3>
  <div aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
          <form id="signForm" method="POST" action="/form/updateDevice.php?id=<?php echo $_GET['id']?>" enctype="multipart/form-data">
              <div class="billing-details p-30">
                  <div class="row">
                      <div class="col-md-3">
                        <div class="imgs-zoom-area">
                          <a onclick="updateToImage()" style="cursor:pointer;">휴대폰 대표 이미지 (290 * 300 권장)</a>
                           <img id="profileImg" src="/image/phone/default.png" alt="">
                           <input type="file" name="thumnailImage" id="fileToUpload" style="display:none">
                           <a onclick="updateToImage()" style="cursor:pointer;">여기를 클릭해서 사진을 등록하세요.</a>
                        </div>
                      </div>
                  </div>
                  <div class="row" style="margin:20px 0px 0px 0px;">
                      <!-- 기본정보 -->
                      <div class="col-md-12">
                        <h4 style="margin:20px 0px 10px 0px;">기본정보</h4>
                      </div>
                      <div class="col-md-2">
                        <p style="margin:0px 0px 0px 0px;">제조사
                          <select class="custom-select" name="manufacturer">
                            <option value="1">삼성 </option>
                            <option value="2">애플 </option>
                            <option value="3">LG </option>
                            <option value="999">기타 </option>
                          </select>
                        </p>
                      </div>
                      <div class="col-md-5">
                        <p style="margin:0px 0px 0px 0px;">디바이스명 <input type="text" name="name" style="margin:0px;" required></p>
                      </div>
                      <div class="col-md-5">
                        <p style="margin:0px 0px 0px 0px;">디바이스 모델명 <input type="text" name="modelName" style="margin:0px;" required></p>
                      </div>

                      <!-- 용량 가격정보 -->
                      <div class="col-md-12">
                        <h4 style="margin:20px 0px 00px 0px;">용량별 가격정보 </h4>
                      </div>

                      <!-- 색상정보 -->
                      <div class="col-md-12" id="color-wrap">
                        <h4 style="margin:20px 0px 00px 0px;">색상정보</h4>
                      </div>
                      <div class="col-md-12" id="spec-wrap">
                        <h4 style="margin:20px 0px 0px 0px;">스펙 정보</h4>
                      </div>
                      <div class="col-md-12">
                        <p style="margin:10px 0px 0px 0px;">디스플레이 정보 <input type="text" name="display" style="margin:0px;" required></p>
                      </div>
                      <div class="col-md-12">
                        <p style="margin:20px 0px 0px 0px;">카메라 정보<input type="text" name="camera" style="margin:0px;" required></p>
                      </div>
                      <div class="col-md-12">
                        <p style="margin:20px 0px 0px 0px;">CPU 정보<input type="text" name="cpu" style="margin:0px;" required></p>
                      </div>
                      <div class="col-md-4">
                        <p style="margin:20px 0px 0px 0px;">크기/무게<input type="text" name="size" style="margin:0px;" required></p>
                      </div>
                      <div class="col-md-4">
                        <p style="margin:20px 0px 0px 0px;">출시일<input type="text" name="release" style="margin:0px;" required></p>
                      </div>

                      <!-- 지원가능한 통신망 -->
                      <div class="col-md-12">
                        <h4 style="margin:20px 0px 00px 0px;">지원가능한 통신망</h4>
                      </div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">KT</p>
                        <label><input type="checkbox" name="plan_category_01" value="4"/>KT : 5G</label>
                      </div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">&nbsp</p>
                        <label><input type="checkbox" name="plan_category_02" value="5"/>KT : LTE</label>
                      </div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">&nbsp</p>
                        <label><input type="checkbox" name="plan_category_03" value="6"/>KT : 3G</label>
                      </div>
                      <div class="col-md-3"></div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">SKT</p>
                        <label><input type="checkbox" name="plan_category_04" value="1"/>SKT : 5G</label>
                      </div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">&nbsp</p>
                        <label><input type="checkbox" name="plan_category_05" value="2"/>SKT : LTE</label>
                      </div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">&nbsp</p>
                        <label><input type="checkbox" name="plan_category_06" value="3"/>SKT : 3G</label>
                      </div>
                      <div class="col-md-3"></div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">LG</p>
                        <label><input type="checkbox" name="plan_category_07" value="7"/>LG : 5G</label>
                      </div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">&nbsp</p>
                        <label><input type="checkbox" name="plan_category_08" value="8"/>LG : LTE</label>
                      </div>
                      <div class="col-md-3">
                        <p style="margin:10px 0px 0px 0px;">&nbsp</p>
                        <label><input type="checkbox" name="plan_category_09" value="9"/>LG : 3G</label>
                      </div>
                      <div class="col-md-3"></div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <input class="submit-btn-1 mt-20 btn-hover-1 f-right" type="submit" value="등록하기">
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- Javascript -->
<script>
  // input form 유효성 검사
  $(function() {
      // $("#signForm").validate();
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
  var colorindex = 1;
  function addColor(){
    $("#spec-wrap").before(
      "<div class=\"col-md-5\" id=\"color-row-name" + colorindex + "\">"+
        "<p style=\"margin:10px 0px 0px 0px;\">색상이름 <input type=\"text\" name=\"colorName" + colorindex + "\" style=\"margin:0px;\" required></p>"+
      "</div>"+
      "<div class=\"col-md-3\" id=\"color-row-image" + colorindex + "\">"+
        "<p style=\"margin:10px 0px 0px 0px;\">이미지선택"+
          "<input type=\"file\" name=\"colorImage" + colorindex + "\" style=\"margin:0px; padding:0px; height:40px; line-height:33px;\">"+
        "</p>"+
        "<p style=\"margin:0px 0px 0px 0px; font-size:9px;\">290*300px 권장 <span id=\"isUploadImage" + colorindex + "\" style=\"float:right; color:#ff7f00;\"></span> </p>"+
      "</div>"+
      "<div class=\"col-md-2\" id=\"color-row-carrier" + colorindex + "\">"+
        "<p style=\"margin:10px 0px 0px 0px;\">통신사선택"+
          "<select class=\"custom-select\" name=\"color-row-carrier" + colorindex + "\">"+
            "<option value=\"4\">전체 </option>"+
            "<option value=\"1\">KT </option>"+
            "<option value=\"2\">SKT </option>"+
            "<option value=\"3\">LG </option>"+
          "</select>"+
        "</p>"+
      "</div>"+
      "<div class=\"col-md-2\" id=\"color-row-button" + colorindex + "\">"+
        "<p style=\"margin:10px 0px 0px 0px;\">&nbsp"+
            "<input class=\"submit-btn-1 mt-20 btn-hover-1 f-left\" type=\"button\" value=\"x\" style=\"background:#ccc; cursor:pointer;\"onclick=\"removeColorRow(" + colorindex + ")\">"+
        "</p>"+
      "</div>"
    );
    colorindex++;
  }

  // 선택한 "용량별 가격정보" 행 삭제
  function removeColorRow(index){
    $("#color-row-name"+index).remove();
    $("#color-row-image"+index).remove();
    $("#color-row-carrier"+index).remove();
    $("#color-row-button"+index).remove();
  }


  var sizeindex = 1;
  // "용량별 가격정보" 추가
  function addSize(){
    $("#color-wrap").before(
      "<div class=\"col-md-5\" id=\"size-row-name" + sizeindex +"\">"+
        "<p style=\"margin:10px 0px 0px 0px;\">용량크기 이름 "+
          "<input type=\"text\" style=\"margin:0px;\" name=\"sizeName" + sizeindex + "\" required>"+
          "<input type=\"text\" style=\"display:none;\" name=\"sizeId" + sizeindex + "\">"+
        "</p>"+
      "</div>"+
      "<div class=\"col-md-2\" id=\"size-row-price" + sizeindex +"\">"+
        "<p style=\"margin:10px 0px 0px 0px;\">가격"+
          "<input type=\"text\" style=\"margin:0px;\" name=\"sizePrice" + sizeindex + "\"required></p>"+
        "</p>"+
      "</div>"+
      "<div class=\"col-md-2\" id=\"size-row-button" + sizeindex +"\">"+
        "<p style=\"margin:10px 0px 0px 0px;\">&nbsp"+
            "<input class=\"submit-btn-1 mt-20 btn-hover-1 f-left\" type=\"button\" value=\"x\" style=\"background:#ccc; cursor:pointer;\" onclick=\"removeSizeRow(" + sizeindex + ")\">"+
        "</p>"+
      "</div>"
    );
    sizeindex++;
  }

  // 선택한 "용량별 가격정보" 행 삭제
  function removeSizeRow(index){
    $("#size-row-button"+index).remove();
    $("#size-row-price"+index).remove();
    $("#size-row-name"+index).remove();
  }

  function speratorColor(colors){
    var colors = colors.split(",");
    console.log("colors : " , colors);
    for(var idx=0; idx<colors.length; idx++){
      addColor();
      var id = colors[idx].split(":")[0];
      var name = colors[idx].split(":")[1];
      var image = colors[idx].split(":")[2];
      var carrid_id =  colors[idx].split(":")[4];
      $("input[name=colorName"+(idx+1)+"]").val(name);
      $("#isUploadImage"+(idx+1)).text(image + "등록됨");
      $("select[name=color-row-carrier" + (idx+1) + "]").val(carrid_id).prop('selected', true);
    }
  }

  function speratorSize(sizes){
    var sizes = sizes.split(",");
    console.log(sizes);
    for(var idx=0; idx<sizes.length; idx++){
      addSize();
      var id = sizes[idx].split(":")[0];
      var size = sizes[idx].split(":")[1];
      var price = sizes[idx].split(":")[2];
      $("input[name=sizeName"+(idx+1)+"]").val(size);
      $("input[name=sizePrice" + (idx+1) + "]").val(price);
      $("input[name=sizeId" + (idx+1) + "]").val(id);

    }
  }

  // 썸네일 사진 미리보기
  imagePreView(target, function(img){
    $("#profileImg").replaceWith(img);
  });

  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
    if($id){
      $result = $api -> select_item($_GET['id']);
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        speratorColor("<?php echo $row['color']?>");
        speratorSize("<?php echo $row['price']?>")
        $("input[name=name]").val("<?php echo $row['name']?>");
        $("input[name=modelName]").val("<?php echo $row['model']?>");
        $("input[name=display]").val("<?php echo $row['spec_display']?>");
        $("input[name=camera]").val("<?php echo $row['spec_cam']?>");
        $("input[name=cpu]").val("<?php echo $row['spec_cpu']?>");
        $("input[name=size]").val("<?php echo $row['spec_size']?>");
        $("input[name=release]").val("<?php echo $row['release']?>");
        $("#profileImg").attr("src","<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/<?php echo $row['model']?>/thumnail.jpg")
      <?php
      }
      $result = $api -> select_device_category_id($_GET['id']);
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        $("input[type=checkbox][value=<?php echo $row['category_id']?>]").prop("checked",true);
      <?php
      }
    }
    else{

    }
  ?>

</script>

</html>
