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
         <!-- START HEADER AREA -->
         <header class="header-area header-wrapper">
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php'?>
         </header>


         <div class="mobile-menu-area d-block d-lg-none section">
           <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/menu.php'?>
         </div>
         <section id="page-content" class="page-wrapper section">

             <!-- SHOP SECTION START -->
             <div class="shop-section mb-80">
                 <div class="container" style="padding:0px;">
                     <div class="row">
                         <div class="col-lg-12">
                             <!-- Tab panes -->
                             <div class="tab-content">
                                 <div class="tab-pane active" id="checkout">
                                     <div class="checkout-content box-shadow p-30">
                                             <div class="row">
                                                 <div class="col-lg-12" >
                                                     <div class="product-tab pro-tab-menu pro-tab-menu-2 text-left" style="justify-content:flex-end;">
                                                         <!-- Nav tabs -->
                                                         <ul id="menu-list" class="nav" style="color:#555;">
                                                             <li><a data-toggle="tab" onclick='updateCarrier(1)' style="cursor:pointer;">KT</a></li>
                                                             <li><a data-toggle="tab" onclick='updateCarrier(2)' style="cursor:pointer;">SKT</a></li>
                                                             <li><a data-toggle="tab" onclick='updateCarrier(3)' style="cursor:pointer;">LG U+</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <!-- billing details -->
                                                 <div class="col-md-5">
                                                     <div class="billing-details pr-10">
                                                         <h6 class="widget-title border-left mb-20">단말기 옵션 선택</h6>
                                                          <div class="imgs-zoom-area">
                                                             <img id="zoom_03" src="<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/default.png" data-zoom-image="<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/default.png" alt="">
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:71.6px; line-height:40px; color:#666666;" data-name="색상">색상</a>
                                                            <div class="single-pro-color-rating clearfix" >
                                                              <div class="sin-pro-color f-left" style="height:100%;">
                                                                  <div class="widget-color f-left" style="height:100%;">
                                                                      <ul style="height:100%;" id="device-color"></ul>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">저장용량</a>

                                                            <div id="device-storage" style="height:100%; float:left; width:100%;" data-name="저장용량">
                                                            </div>
                                                            <!-- <select id="device-storage" class="custom-select" data-name="저장용량" >
                                                            </select> -->
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;" data-name="할인방식">할인방식</a>
                                                            <div id="discount-list" style="height:100%; float:left; width:100%;">
                                                              <p style="width:50%;" onclick="selectDiscountOption(this,'1')" id="discount-list-1">공시지원할인</p>
                                                              <p style="width:50%;" onclick="selectDiscountOption(this,'2')" id="discount-list-2">선택약정할인</p>
                                                            </div>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;" data-name="할인방식">가입유형</a>
                                                            <div id="subscription-list" style="height:100%; float:left; width:100%;">
                                                              <p id="subscription-list-0" style="width:33%;" onclick="selectSubscriptionOption(this,0,'new')">신규가입</p>
                                                              <p id="subscription-list-1" style="width:33%;" onclick="selectSubscriptionOption(this,1,'number')">번호이동</p>
                                                              <p id="subscription-list-2" style="width:33%;" onclick="selectSubscriptionOption(this,2,'device')">기기변경</p>
                                                            </div>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;" data-name="요금제">요금제</a>
                                                            <select id="carrier-plan" class="custom-select">
                                                                <option value="0">선택</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;" data-name="할부개월">할부개월</a>
                                                            <div id="installment-list" style="height:100%; float:left; width:100%;">
                                                              <p id="installment-list-24" style="width:25%;" onclick="selectInstallmentOption(this, 24)">24개월</p>
                                                              <p id="installment-list-30" style="width:25%;" onclick="selectInstallmentOption(this, 30)">30개월</p>
                                                              <p id="installment-list-36" style="width:25%;" onclick="selectInstallmentOption(this, 36)">36개월</p>
                                                              <p id="installment-list-48" style="width:25%;" onclick="selectInstallmentOption(this, 48)">48개월</p>
                                                            </div>
                                                          </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-7">
                                                     <div class="payment-details pl-10 mb-50" style="margin-bottom:20px;">
                                                         <h6 class="widget-title border-left mb-20">단말기 할인방식</h6>
                                                         <table>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">출고가</td>
                                                               <td id="device-price" class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td id="device-support-title" class="td-title-1" style="color:#666666;">공시지원금</td>
                                                               <td id="support-price-01" class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">추가지원금</td>
                                                               <td id="support-price-02" class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color: rgb(255, 127, 0);">임직원지원금</td>
                                                               <td id="support-price-03" class="td-title-2" style="color: rgb(255, 127, 0);">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">총 할부원금</td>
                                                               <td id="installment-price" class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">월 할부금</td>
                                                               <td id="installment-month" class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">월 할부이자</td>
                                                               <td id="installment-cash" class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">월 할부금 합계</td>
                                                               <td id="installment-total" class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                         </table>
                                                     </div>
                                                     <div class="payment-details pl-10 mb-50" >
                                                         <h6 class="widget-title border-left mb-20">요금제 할인방식</h6>
                                                         <table>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">기본료</td>
                                                                 <td id="carrier-price" class="td-title-2" style="color:#666666;">0</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">요금약정할인</td>
                                                                 <td id="carrier-support-01" class="td-title-2" style="color:#666666;">0</td>
                                                             </tr>
                                                             <tr>
                                                                 <td id="carrier-support-title" class="td-title-1" style="color:#666666;">선택약정할인</td>
                                                                 <td id="carrier-support-02" class="td-title-2" style="color:#666666;">0</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">월 요금합계</td>
                                                                 <td id="carrier-total" class="td-title-2" style="color:#666666;">0</td>
                                                             </tr>
                                                         </table>
                                                     </div>
                                                     <div class="payment-details pl-10 mb-50" >
                                                         <h6 class="widget-title border-left mb-20">합계 </h6>
                                                         <table>
                                                             <tr>
                                                                 <td class="order-total">Order Total</td>
                                                                 <td id="price-total" class="order-total-price" style="font-size:20px;">0</td>
                                                             </tr>
                                                         </table>
                                                     </div>
                                                     <!-- payment-method -->
                                                     <div class="payment-method">
                                                         <h6 class="widget-title border-left mb-20">payment method</h6>
                                                         <div id="accordion">
                                                             <div class="panel">
                                                                 <h4 class="payment-title box-shadow">
                                                                     <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                     제품 스펙보기
                                                                     </a>
                                                                 </h4>

                                                                 <div id="collapseTwo" class="panel-collapse collapse" >
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <!-- payment-method end -->
                                                     <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;">상담</button>
                                                     <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="copy_to_clipboard('<?php echo $_SERVER['DOCUMENT_ROOT']?>pg/about_item_v2.php?', '<?php echo $_GET['carrier']?>')">공유</button>
                                                     <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="saveStore();" >저장</button>
                                                 </div>
                                             </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- SHOP SECTION END -->

         </section>
         <!-- End page content -->
         <footer id="footer" class="footer-area section">
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
         </footer>

         <div id="resultPopup" style="width:100%; height:auto; background:#262626; bottom:0; position:fixed; display:none;" >
           <div class="col-md-6" id="mobileWrap" >
               <div class="payment-details pl-10 mb-50" style="margin:0px;">
                   <table>
                     <tr>
                         <td class="td-title-1" style="color:#ffffff;">출고가</td>
                         <td class="td-title-2" style="color:#ffffff;"><a id="mobile-device-price"></a></td>
                     </tr>
                     <tr>
                         <td class="td-title-1" style="color:#ffffff;">지원금</td>
                         <td class="td-title-2" style="color:#ffffff;"><a id="mobile-discount-price"></a></td>
                     </tr>
                     <tr>
                         <td class="td-title-1" style="color:#ffffff;">월 납입금액</td>
                         <td class="td-title-2" style="color:#ffffff;" id="mobile-total-price">800,000</td>
                     </tr>
                   </table>
               </div>
         </div>
      </div>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
   </body>


   <script>

       // 통신사 탭메뉴에 하이라이트
       function menuHighlight(){
         var menu = $("#menu-list").children();
         children = menu[<?php echo $_GET['carrier']?>-1];
         children.classList.add("active");
       }

      menuHighlight();

      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $("#resultPopup").show();
      }
   </script>
   <script>
      // 모든 정보를 담아놓은 핵심 object
      var localDataSet = {
        "device" : {  // 단말기 종류
          "id" : "<?php echo $_GET['id']?>",
          "model" : "",             // Model 이름
          "color_id" : "",       // 색상 select value
          "storage_id" : "",     // 저장용량 select value
          "price" : 0               // 출고가
        },
        "discount" : {  // 할인방식
          "how_value" : "선택", // 공시지원 : device-discount, 선택약정 : plan-discount
          "period" : 1,                     // 할부개월
          "regular_device_discount" : 0,
          "regular_device_discount_option" : 0,
          "device_discount" : 0,            // 공시지원일경우 할인되는 가격
          "device_discount_option" : 0,     // 추가지원금
          "plan_discount" : 0.25,            // 요금제지원일경우 할인되는 퍼센트
          "manager_discount" : 0            // 임직원 지원금
        },
        "plan" : {  // 요금제
          "value" : "", // 요금제 select value
          "price" : 0,  // 요금제 가격
          "id":0        // 요금제 ID
        },
        "carrier" : { // 통신사
          "id" : "<?php echo $_GET['carrier']?>"
        },
        "subscription" : {
          "id": 0,
          "name" : ""
        }
      };

      // 할인방식 선택
      $("#discount-list").change(function(){
        var type = $(this).find("option:selected").data("value");
        localDataSet['discount'].how_value = type;
        console.log("type : " , type);
        switch (type) {
          case "device-discount":
            localDataSet['discount'].device_discount = localDataSet['discount'].regular_device_discount;
            localDataSet['discount'].device_discount_option = localDataSet['discount'].regular_device_discount_option;
            localDataSet['discount'].plan_discount = 0;
            $("#device-support-title").css("color","#ff7f00");
            $("#carrier-support-title").css("color","#666");
            $("#support-price-01").css("color","#ff7f00")
            $("#carrier-support-02").css("color","#666")
            break;
          case "plan-discount" :
            localDataSet['discount'].device_discount = 0;
            localDataSet['discount'].device_discount_option = 0;
            localDataSet['discount'].plan_discount = 0.25 ;
            $("#device-support-title").css("color","#666");
            $("#carrier-support-title").css("color","#ff7f00");
            $("#support-price-01").css("color","#666")
            $("#carrier-support-02").css("color","#ff7f00")
            break;
          case "default" :
            localDataSet['plan'].price = 0;
            break;
        }
        $(this).css("border","1px rgba(0, 0, 0, 0.1)")
        update();
        console.log("discount-localDataSet : " , localDataSet);
      });

      // 요금제 선택
      $("#carrier-plan").change(function(){
        if($(this).val()){
          var price = $(this).find("option:selected").data("price") ? $(this).find("option:selected").data("price") : 0;
          var fund = $(this).find("option:selected").data("fund") ? $(this).find("option:selected").data("fund") : 0;
          var additional_fund = $(this).find("option:selected").data("additional_fund") ? $(this).find("option:selected").data("additional_fund") : 0;

          localDataSet['plan'].price = price;
          localDataSet['plan'].value = $(this).val();

          localDataSet['discount'].regular_device_discount = fund;
          localDataSet['discount'].regular_device_discount_option =additional_fund;
          localDataSet['discount'].device_discount = localDataSet['discount'].regular_device_discount;
          localDataSet['discount'].device_discount_option = localDataSet['discount'].regular_device_discount_option;
        }
        else{
          $('#carrier-plan option:eq(0)').prop('selected', true).trigger('change');
        }
        $(this).css("border","1px rgba(0, 0, 0, 0.1)")
        console.log("plan-localDataSet : " , localDataSet);
        update();
      });

      // 할부개월 선택
      $("#discount-period").change(function(){
        if($(this).val()){
          var period = $(this).val();
          localDataSet['discount'].period = period;
          console.log("localDataSet : " , localDataSet);
        }
        else{
          $('#discount-period option:eq(0)').prop('selected', true).trigger('change');
        }
        $(this).css("border","1px rgba(0, 0, 0, 0.1)")
        update();
      });

      // 색상선택
      $("#device-color").change(function(){
        var imgName = $(this).find("option:selected").data("img");
        var url = "<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/"+localDataSet['device'].model + "/" + imgName;
        if(!imgName) url = "<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/default.png";

        localDataSet['device'].color_id = $(this).val();

        $("#zoom_03").attr("src",url);
        $("#zoom_03").attr("data-zoom-image",url);
        $(this).css("border","1px rgba(0, 0, 0, 0.1)")
        console.log("localDataSet : " , localDataSet);
        update();
      });
   </script>

   <script>

      function saveStore(){
        var isCheck = true;
        var selects = $("select");
        for(var idx=1; idx<selects.length; idx++){
          var select = selects[idx];
          if(select.selectedIndex == 0){
            select.style.border = "1px solid #ff7f00";
            isCheck = false;
          }
        }
        if(isCheck) {
          var url = getURL("<?php echo $_GET['carrier'] ?>");
          location.href = "<?php $_SERVER['DOCUMENT_ROOT']?>/form/addCart.php?" + url;
        }
        else alert("단말기 옵션을 모두 선택해주세요.")
      }

      // 현재 견적서의 URL을 반환
      function getURL(carrier){
        var deviceID = "<?php echo $_GET['id']?>";
        var installment_period = localDataSet['discount'].period;
        var discount = localDataSet['discount'].how_value;
        var size = localDataSet['device'].storage_id;
        var plan = $("#carrier-plan").val();
        var color = localDataSet['device'].color_id;
        var subscription = localDataSet['subscription'].id;
        var str ="id=" + deviceID +
                  "&carrier="+ carrier +
                  "&installment_period=" + installment_period +
                  "&discount=" + discount +
                  "&size=" + size +
                  "&plan=" + plan +
                  "&color=" + color +
                  "&subscription=" + subscription;
        return str;
      }

      // 통신사를 옮길때, URL을 그대로 가져간다.
      function updateCarrier(carrier){
        // console.log("carrier : " , carrier);
        location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v3.php?" + getURL(carrier);
      }

      // 모바일용 결과창을 하단에 띄운다
      function showTotal(){
        if($("#mobileWrap").is(":hidden")){
          $("#mobileWrap").show();
        }
        else{
          $("#mobileWrap").hide();
        }
      }

      // 저장용량에 따른 가격리턴
      function storageToPrice(price){
        var storages = price.split(",");
        for(var idx=0; idx< storages.length; idx++){
          var id = storages[idx].split(":")[0];
          var storage = storages[idx].split(":")[1];
          var price = storages[idx].split(":")[2];
          addStorageOption(id, storage, price);
        }
      }

      // color id에 따른 이름 리턴
      function colorToName(color){
        var colorList = new Array();
        var colors = color.split(",");
        for(var idx=0; idx<colors.length; idx++){
          var id = colors[idx].split(":")[0];
          var name = colors[idx].split(":")[1];
          var url = colors[idx].split(":")[2];
          var rgb = colors[idx].split(":")[3];
          addColorOption(id, name, url, rgb); // 색상옵션 추가
        }
      }

      // 옵션메뉴에 하이라이트 추가
      function optionHighlight(childs, target){
        removeAllChildClass(childs);
        target.classList.add("active");
      }

      // 기존에 선택된 하이라이트 삭제
      function removeAllChildClass(childs){
        for(var index=0; index<childs.length; index++){
          childs[index].classList.remove("active");
        }
      }

      // 기기색상 옵션 추가 및 선택 이벤
      function addColorOption(id, name, url, rgb){
        $("head").append("<style>.color_"+rgb+":before{background:#"+rgb+";}</style>");
        $("#device-color").append("<li class=\"color_"+rgb+"\" style=\"margin:0px; height:100%;\" id=\"color-list-"+id+"\" onclick=\"selectColorOption("+id+",\'"+url+"\')\"><a href=\"#\"></a></li>");
      }
      function selectColorOption(id, mUrl){
        var imgName = mUrl;
        var url = "<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/"+localDataSet['device'].model + "/" + imgName;
        if(!mUrl) url = "<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/default.png";

        localDataSet['device'].color_id = id;

        $("#zoom_03").attr("src",url);
        $("#zoom_03").attr("data-zoom-image",url);
        // $(this).css("border","1px rgba(0, 0, 0, 0.1)")
        console.log("localDataSet : " , localDataSet);
        update();
      }

      // 기기용량 옵션 추가 및 선택 이벤
      function addStorageOption(id, storage, price){
        $("#device-storage").append("<p style=\"width:25%;\" id=\"storage-list-"+id+"\" onclick=\"selectStorageOption(this, "+id+",'"+storage+"',"+price+" );\">"+storage+"</p>");
      };
      function selectStorageOption(target, id, storage, price){
        optionHighlight($("#device-storage").children(), target);
        var price = price;
        var storage = storage;
        localDataSet['device'].price = price;
        localDataSet['device'].storage_id =  id;
        console.log("storage-change localDataSet : " , localDataSet);
        update();
      }

      // 할인방식 선택 이벤트
      function selectDiscountOption(target, type){
        optionHighlight($("#discount-list").children(), target);
        localDataSet['discount'].how_value = type;
        console.log("type : " , type);
        switch (type) {
          case "1": // 공시지원할인
            localDataSet['discount'].device_discount = localDataSet['discount'].regular_device_discount;
            localDataSet['discount'].device_discount_option = localDataSet['discount'].regular_device_discount_option;
            localDataSet['discount'].plan_discount = 0;
            $("#device-support-title").css("color","#ff7f00");
            $("#carrier-support-title").css("color","#666");
            $("#support-price-01").css("color","#ff7f00")
            $("#carrier-support-02").css("color","#666")
            break;
          case "2" : // 선택약정할인
            localDataSet['discount'].device_discount = 0;
            localDataSet['discount'].device_discount_option = 0;
            localDataSet['discount'].plan_discount = 0.25 ;
            $("#device-support-title").css("color","#666");
            $("#carrier-support-title").css("color","#ff7f00");
            $("#support-price-01").css("color","#666")
            $("#carrier-support-02").css("color","#ff7f00")
            break;
          case "default" :
            localDataSet['plan'].price = 0;
            break;
        }
        update();
        console.log("discount-localDataSet : " , localDataSet);
      }

      // 가입유형 선택 이벤트
      function selectSubscriptionOption(target, id, type){
        optionHighlight($("#subscription-list").children(), target);
        localDataSet['subscription'].id = id;
        localDataSet['subscription'].name = type;
        update();
        console.log("discount-localDataSet : " , localDataSet);
      }

      // 할부개월 선택 이벤트
      function selectInstallmentOption(target, type){
        optionHighlight($("#installment-list").children(), target);
        localDataSet['discount'].period = type;
        console.log("localDataSet : " , localDataSet);
        update();

      }

      // 요금제 옵션 추가
      function addPlanOption(id, name, price, fund, additional_fund){
        console.log("fund : " ,fund);
        console.log("additional_fund : " ,additional_fund);
        $("#carrier-plan").append("<option value=\"" + id + "\" data-price=\"" + price + "\" data-fund=\"" + fund + "\" data-additional_fund=\"" + additional_fund + "\">" + name + " (월 " + numberWithCommas(price) + ")</option>");
      }

      // 출고가 가격설정
      function setDevicePrice(price){
        var discount_period = $("#discount-period option:checked").val();         // 할부개월
        $("#device-price").text(numberWithCommas(price));                         // 출고가
        $("#installment-price").text(numberWithCommas(price));                    // 할부원금
        $("#installment-month").text(numberWithCommas(price/discount_period));    // 월 할부금
      }

      function update(){
        $("#device-price").text(numberWithCommas(localDataSet['device'].price));
        $("#support-price-01").text(numberWithCommas(localDataSet['discount'].device_discount));
        $("#support-price-02").text(numberWithCommas(localDataSet['discount'].device_discount_option));
        var installment_price = localDataSet['device'].price - localDataSet['discount'].device_discount - localDataSet['discount'].device_discount_option;
        $("#installment-price").text(numberWithCommas(installment_price));
        $("#installment-month").text(numberWithCommas(parseInt(installment_price / localDataSet['discount'].period)));
        $("#installment-cash").text(numberWithCommas(parseInt(installment_price / localDataSet['discount'].period * 0.056)));
        $("#installment-total").text(numberWithCommas(parseInt((installment_price / localDataSet['discount'].period) + (installment_price / localDataSet['discount'].period * 0.056))));
        $("#carrier-price").text(numberWithCommas(localDataSet['plan'].price));
        $("#carrier-support-01").text(0);
        $("#carrier-support-02").text(numberWithCommas(localDataSet['plan'].price * parseFloat(localDataSet['discount'].plan_discount)));
        var carrier_price = localDataSet['plan'].price - (localDataSet['plan'].price * localDataSet['discount'].plan_discount);
        $("#carrier-total").text(numberWithCommas(carrier_price));
        $("#price-total").text(numberWithCommas(parseInt((installment_price / localDataSet['discount'].period) + (installment_price / localDataSet['discount'].period * 0.056) + (installment_price / localDataSet['discount'].period * 0.056) + carrier_price)));

        // mobile
        $("#mobile-device-price").text(numberWithCommas(localDataSet['device'].price));
        $("#mobile-discount-price").text("-" + numberWithCommas(localDataSet['discount'].device_discount + localDataSet['discount'].device_discount_option + (localDataSet['plan'].price * localDataSet['discount'].plan_discount) + localDataSet['discount'].manager_discount));
        $("#mobile-total-price").text(numberWithCommas(parseInt((installment_price / localDataSet['discount'].period) + (installment_price / localDataSet['discount'].period * 0.056) + (installment_price / localDataSet['discount'].period * 0.056) + carrier_price)));
      }
   </script>

  <script>
    <?php
      if(!isset($_SESSION)) session_start();
  		if(isset($_SESSION['id'])){

        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        $item = $api -> select_item($_GET['id']);
        $plan = $api -> select_plans($_GET['id'], $_GET['carrier']);

        while ($row = $item->fetch(PDO::FETCH_BOTH)){?>
          localDataSet['device'].model = "<?php echo $row['model']?>";
          $("#product-name").text("<?php echo $row['name']?>");
          $("#product-model").text("<?php echo $row['model']?>");
          $("#product-manufacturer").text("<?php echo $row['manufacturer_id']?>");
          $("#product-display").text("<?php echo $row['spec_display']?>");
          $("#product-size").text("<?php echo $row['spec_size']?>");
          $("#product-cam").text("<?php echo $row['spec_cam']?>");
          $("#product-release").text("<?php echo $row['release']?>");
          $("#product-cpu").text("<?php echo $row['spec_cpu']?>");
          $("#product-name").text("<?php echo $row['name']?>");
          storageToPrice("<?php echo $row['price']?>");
          colorToName("<?php echo $row['color']?>")

            //용량 첫번째것 선택
            $("#device-storage option:eq(0)").prop("selected", true).trigger('change');
          <?php
        }

        while ($row = $plan->fetch(PDO::FETCH_BOTH)){?>
          addPlanOption(
            "<?php echo $row['_id']?>",
            "<?php echo $row['name']?>",
            "<?php echo $row['price']?>",
            "<?php echo $row['fund']?>",
            "<?php echo $row['additional_fund']?>");
          <?php
        }

        // url에 '저장용량'이 있다면 선택 후 트리거
        if(isset($_GET['size'])){
          echo "$('#storage-list-".$_GET['size']."').click();";
        }else{
          echo "$('#device-storage').children()[0].click();";
        }

        // url에 '색상'이 있다면 선택 후 트리거
        if(isset($_GET['color'])){
          echo "$('#color-list-".$_GET['color']."').click();";
        }else{
          echo "$('#device-color').children()[0].click();";
        }

        // url에 '가입유형'이 있다면 선택 후 트리거
        if(isset($_GET['subscription'])){
          echo "$('#subscription-list-".$_GET['subscription']."').click();";
        }else{
          echo "$('#subscription-list').children()[0].click();";
        }

        // url에 '요금제'가 있다면 선택 후 트리거
        if(isset($_GET['plan'])){
          if(strcmp($_GET['plan'],"null"))
            echo "$('#carrier-plan').val('".$_GET['plan']."').prop('selected', true).trigger('change');";
        }

        // url에 '할인방식'이 있다면 선택 후 트리거
        if(isset($_GET['discount'])){
          echo "$('#discount-list-".$_GET['discount']."').click();";
        }else{
          echo "$('#discount-list').children()[0].click();";
        }

        // url에 '할부기간'이 있다면 선택 후 트리거
        if(isset($_GET['installment_period'])){
          echo "$('#installment-list-".$_GET['installment_period']."').click();";
        }else{
          echo "$('#installment-list').children()[0].click();";
        }
      }
      else{
        echo "alert(\"로그인정보가 없습니다.로그인화면으로 이동합니다.\");
              location.replace(\"/\")";
      }
    ?>

    $(".color-1:before").css("background","#000");
  </script>
</html>
