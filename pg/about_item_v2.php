<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Subas || Home</title>
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
                                         <form action="#">
                                             <div class="row">
                                                 <div class="col-lg-12" >
                                                     <div class="product-tab pro-tab-menu pro-tab-menu-2 text-left" style="justify-content:flex-end;">
                                                         <!-- Nav tabs -->
                                                         <ul id="menu-list"class="nav" style="color:#555;">
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
                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:20px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">저장용량</a>
                                                            <select id="device-storage" class="custom-select">
                                                                <option value="defalt">선택</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">요금제</a>
                                                            <select id="carrier-plan" class="custom-select">
                                                                <option value="defalt">선택</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">할인방식</a>
                                                            <select id="discount-list" class="custom-select">
                                                                <option value="defalt">선택</option>
                                                                <option value="device-discount">공시지원할인</option>
                                                                <option value="plan-discount">선택약정할인</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">할부개월</a>
                                                            <select id="discount-period" class="custom-select">
                                                                <option value="1">선택</option>
                                                                <option value="24">24개월</option>
                                                                <option value="30">30개월</option>
                                                                <option value="36">36개월</option>
                                                                <option value="48">48개월</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">색상</a>
                                                            <select id="device-color" class="custom-select">
                                                                <option value="defalt">선택</option>
                                                            </select>
                                                          </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-7">
                                                     <div class="payment-details pl-10 mb-50" style="margin-bottom:20px;">
                                                         <h6 class="widget-title border-left mb-20">단말기 할인방식</h6>
                                                         <table>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">출고가</td>
                                                               <td id="device-price"class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">공시지원금</td>
                                                               <td id="support-price-01"class="td-title-2" style="color:#666666;">0</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">추가지원금</td>
                                                               <td id="support-price-02" class="td-title-2" style="color:#666666;">0</td>
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
                                                               <td id="installment-total"class="td-title-2" style="color:#666666;">0</td>
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
                                                                 <td class="td-title-1" style="color:#666666;">선택약정할인</td>
                                                                 <td id="carrier-support-02" class="td-title-2" style="color:#666666;">0</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">월 요금합계</td>
                                                                 <td id="carrier-total"class="td-title-2" style="color:#666666;">0</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="order-total">Order Total</td>
                                                                 <td id="price-total" class="order-total-price">0</td>
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
                                                                     <table>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">제품명</td>
                                                                             <td id="product-name"class="td-title-2"  style="color:#666666;"></td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">모델명</td>
                                                                             <td id="product-model" class="td-title-2" style="color:#666666;"></td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">제조사</td>
                                                                             <td id="product-manufacturer" class="td-title-2" style="color:#666666;"></td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">제조국</td>
                                                                             <td class="td-title-2" style="color:#666666;">한국</td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">KC인증번호</td>
                                                                             <td class="td-title-2" style="color:#666666;">-</td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">디스플레이</td>
                                                                             <td id="product-display" class="td-title-2" style="color:#666666;"></td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">크기/무게</td>
                                                                             <td id="product-size" class="td-title-2" style="color:#666666;">*</td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">카메라화소</td>
                                                                             <td id="product-cam" class="td-title-2" style="color:#666666;">*</td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">제조연월일</td>
                                                                             <td id="product-release" class="td-title-2" style="color:#666666;">*</td>
                                                                         </tr>
                                                                         <tr>
                                                                             <td class="td-title-1" style="color:#666666;">CPU</td>
                                                                             <td id="product-cpu" class="td-title-2" style="color:#666666;">*</td>
                                                                         </tr>
                                                                     </table>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <!-- payment-method end -->
                                                     <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">상담하기</button>
                                                     <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">공유하기</button>
                                                 </div>
                                             </div>
                                         </form>
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

         <div id="resultPopup" style="width:100%; height:auto; background:#ff7f00; bottom:0; position:fixed; display:none;" >
           <div class="col-md-6"  style="">
               <div class="payment-details pl-10 mb-50" style="margin:0px;">
                 <p onclick="showTotal();" style="color:#fff;">▲</p>
               </div>
           </div>
           <div class="col-md-6" id="mobileWrap" style=" display:none;">
               <div class="payment-details pl-10 mb-50" style="margin:0px;">
                   <table>
                     <tr>
                         <td class="td-title-1" style="color:#ffffff;">출고가</td>
                         <td class="td-title-2" style="color:#ffffff;"><a id="product-price"></a></td>
                     </tr>
                     <tr>
                         <td class="td-title-1" style="color:#ffffff;">지원금+할인</td>
                         <td class="td-title-2" style="color:#ffffff;">-1,000,000</td>
                     </tr>
                     <tr>
                         <td class="td-title-1" style="color:#ffffff;">금액</td>
                         <td class="td-title-2" style="color:#ffffff;">800,000</td>
                     </tr>
                   </table>
               </div>
         </div>
      </div>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
   </body>

   <script>
      // 모든 정보를 담아놓은 핵심 object
      var localDataSet = {
        "device" : {
          "id" : "<?php echo $_GET['id']?>",
          "model" : "",
          "color_value" : "",
          "storage_value" : "",
          "storage_price" : 0
        },
        "discount" : {
          "how_value" : "선택", // 공시지원 : device, 선택약정 : plan
          "period_value" : 1
        },
        "plan" : {
          "value" : ""
        },
        "carrier" : {
          "id" : "<?php echo $_GET['carrier']?>"
        }
      };

      // 저장용량 선택
      $("#device-storage").change(function(){
        var price = localDataSet['device'].storage_price = ($(this).val()).split("-")[1];
        localDataSet['device'].storage_value = $(this).val();
        setDevicePrice(price);
        totalPrice();
        console.log("localDataSet : " , localDataSet);
      });

      // 할인방식 선택
      $("#discount-list").change(function(){
        var type = $(this).val();
        localDataSet['discount'].how_value = type;
        switch (type) {
          case "device-discount":
            $("#support-price-01").text(numberWithCommas("250000"));
            $("#carrier-support-02").text("0");
            break;
          case "plan-discount" :
            var plan_price = CommasToNumber($("#carrier-price").text());
            $("#support-price-01").text("0");
            $("#carrier-support-02").text(numberWithCommas(plan_price-(plan_price*3/4)));
            break;

        }
        console.log("$(this).val() : " , $(this).val());
        console.log("localDataSet : " , localDataSet);
      });

      // 요금제 선택
      $("#carrier-plan").change(function(){
        var price = ($(this).val()).split("-")[1];
        $("#carrier-price").text(numberWithCommas(price));
        localDataSet['plan'].value = $(this).val();
      });

      // 할부개월 선택
      $("#discount-period").change(function(){
        var device_price = CommasToNumber($("#device-price").text());
        var period = $(this).val();
        var price = numberWithCommas(parseInt(device_price/period));
        $("#installment-month").text(price);
        localDataSet['discount'].period_value = $(this).val();
      });

      // 색상선택
      $("#device-color").change(function(){
        var imgName = $("#device-color option:checked").attr("name");
        var url = "<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/"+localDataSet['device'].model + "/" + imgName;
        if(!imgName) url = "<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/default.png";

        localDataSet['device'].color_value = $(this).val();

        $("#zoom_03").attr("src",url);
        $("#zoom_03").attr("data-zoom-image",url);
      });


   </script>

   <script>
      function updateCarrier(carrier){
        var deviceID = "<?php echo $_GET['id']?>";
        location.href=
          "<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v2.php?" +
          "id=" + deviceID +
          "&carrier="+carrier;
      }


      function showTotal(){
        if($("#mobileWrap").is(":hidden")){
          $("#mobileWrap").show();
        }
        else{
          $("#mobileWrap").hide();
        }
      }

      // 통신사 탭메뉴에 하이라이트
      function menuHighlight(){
        var menu = $("#menu-list").children();
        children = menu[<?php echo $_GET['carrier']?>-1];
        children.classList.add("active");
      }

      // 저장용량에 따른 가격리턴
      function storageToPrice(price){
        var storages = price.split(",");
        storages.forEach((item, i) => {
          var storage = item.split(":")[0];
          var price = item.split(":")[1];
          addStorageOption(storage, price)
        });
      }

      // color id에 따른 이름 리턴
      function colorToName(color){
        var colorList = new Array();
        var colors = color.split(",");
        colors.forEach((item, i) => {
          var id = item.split(":")[0];
          var name = item.split(":")[1];
          var url = item.split(":")[2];
          var rgb = item.split(":")[3];

          addColorOption(id, name, url) // 색상옵션 추가
        });
      }

      // 기기용량 옵션추가
      function addStorageOption(storage, price){
        $("#device-storage").append("<option value=\"" + storage + "-" + price + "\">" + storage + "</option>");
      };

      // 기기색상 옵션추가
      function addColorOption(id, name, url){
        $("#device-color").append("<option name=\"" + url + "\" value=\"" + id + "\">" + name + "</option>");
      }

      // 요금제 옵션 추가
      function addPlanOption(id, name, price){
        $("#carrier-plan").append("<option value=\"" + id + "-" + price + "\">" + name + " (월 " + numberWithCommas(price) + ")</option>");
      }

      // 출고가 가격설정
      function setDevicePrice(price){
        var discount_period = $("#discount-period option:checked").val(); // 할부개월
        $("#device-price").text(numberWithCommas(price));                 // 출고가
        $("#installment-price").text(numberWithCommas(price));            // 할부원금
        $("#installment-month").text(numberWithCommas(price/discount_period));
      }

      function update(){
        var device_price = CommasToNumber($("#device-price").text());                   // 출고가
        var device_discount01 = CommasToNumber($("#support-price-01").text());          // 공시지원금
        var device_discount02 = CommasToNumber($("#support-price-02").text());          // 추가지원금
        var installment_price = device_price - device_discount01 - device_discount02;   // 총 할부원금
        var installment_month = CommasToNumber($("#installment_month").text());         // 월 할부금
        var installment_cash = CommasToNumber($("#installment-cash").text());           // 월 할부이자


        $("#price-total").text(numberWithCommas(device_price));
      }

   </script>


   <script>

    menuHighlight();

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      $("#resultPopup").show();
    }
   </script>


  <script>
    <?php
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

        <?php
      }

      while ($row = $plan->fetch(PDO::FETCH_BOTH)){?>
        addPlanOption(
          "<?php echo $row['_id']?>",
          "<?php echo $row['name']?>",
          "<?php echo $row['price']?>");
        <?php
      }
    ?>
  </script>
</html>
