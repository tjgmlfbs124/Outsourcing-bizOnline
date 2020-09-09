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
                                                             <li><a data-toggle="tab" onclick='location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v2.php?manufacturer=0"' style="cursor:pointer;">KT</a></li>
                                                             <li><a data-toggle="tab" onclick='location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v2.php?manufacturer=1"'style="cursor:pointer;">SKT</a></li>
                                                             <li><a data-toggle="tab" onclick='location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v2.php?manufacturer=2"'style="cursor:pointer;">LG U+</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <!-- billing details -->
                                                 <div class="col-md-6">
                                                     <div class="billing-details pr-10">
                                                         <h6 class="widget-title border-left mb-20">단말기 옵션 선택</h6>
                                                          <div class="imgs-zoom-area">
                                                             <img id="zoom_03" src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/img/product/6.jpg" data-zoom-image="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/img/product/6.jpg" alt="">
                                                          </div>
                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:20px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">저장용량</a>
                                                            <select class="custom-select">
                                                                <option value="defalt">선택</option>
                                                                <option value="defalt">128GB</option>
                                                                <option value="c-1">256GB</option>
                                                                <option value="c-2">512GB</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">할인방식</a>
                                                            <select class="custom-select">
                                                                <option value="defalt">선택</option>
                                                                <option value="defalt">공시지원할인</option>
                                                                <option value="c-1">선택약정할인</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">요금제</a>
                                                            <select class="custom-select">
                                                                <option value="defalt">선택</option>
                                                                <option value="c-1">5GX스텐다드</option>
                                                                <option value="c-2">5GX프라임</option>
                                                                <option value="c-3">5GX플래티넘</option>
                                                                <option value="c-4">0틴 5G</option>
                                                                <option value="c-5">슬림</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">할부개월</a>
                                                            <select class="custom-select">
                                                                <option value="defalt">선택</option>
                                                                <option value="c-1">24개월</option>
                                                                <option value="c-2">30개월</option>
                                                                <option value="c-3">36개월</option>
                                                                <option value="c-4">48개월</option>
                                                            </select>
                                                          </div>

                                                          <div class="product-tab pro-tab-menu"  style="width:100%; margin:10px 0px 10px 0px; height:40px; font-size:13px; justify-content:left;">
                                                            <a style="width:100px; line-height:40px; color:#666666;">색상</a>
                                                            <select class="custom-select">
                                                                <option value="defalt">선택</option>
                                                                <option value="c-1">골드</option>
                                                                <option value="c-2">브라운</option>
                                                                <option value="c-3">블랙</option>
                                                                <option value="c-4">화이트</option>
                                                            </select>
                                                          </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="payment-details pl-10 mb-50" style="margin-bottom:20px;">
                                                         <h6 class="widget-title border-left mb-20">단말기 할인방식</h6>
                                                         <table>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">출고가</td>
                                                               <td id="device-price"class="td-title-2" style="color:#666666;">1,800,000</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">공시지원금</td>
                                                               <td id="support-price-01"class="td-title-2" style="color:#666666;">350,000</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">추가지원금</td>
                                                               <td id="support-price-02" class="td-title-2" style="color:#666666;">200,000</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">총 할부원금</td>
                                                               <td id="installment-price" class="td-title-2" style="color:#666666;">850,000</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">월 할부금</td>
                                                               <td id="installment-month" class="td-title-2" style="color:#666666;">60,000</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">월 할부이자</td>
                                                               <td id="installment-cash" class="td-title-2" style="color:#666666;">5,412</td>
                                                           </tr>
                                                           <tr>
                                                               <td class="td-title-1" style="color:#666666;">월 할부금 합계</td>
                                                               <td id="installment-total"class="td-title-2" style="color:#666666;">545,000</td>
                                                           </tr>
                                                         </table>
                                                     </div>
                                                     <div class="payment-details pl-10 mb-50" >
                                                         <h6 class="widget-title border-left mb-20">요금제 할인방식</h6>
                                                         <table>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">기본료</td>
                                                                 <td id="carrier-price" class="td-title-2" style="color:#666666;">1,800,000</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">요금약정할인</td>
                                                                 <td id="carrier-support-01" class="td-title-2" style="color:#666666;">350,000</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">선택약정할인</td>
                                                                 <td id="carrier-support-02"class="td-title-2" style="color:#666666;">200,000</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="td-title-1" style="color:#666666;">월 요금합계</td>
                                                                 <td id="carrier-total"class="td-title-2" style="color:#666666;">850,000</td>
                                                             </tr>
                                                             <tr>
                                                                 <td class="order-total">Order Total</td>
                                                                 <td id="price-total"class="order-total-price">1,680,000</td>
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
                                                                 <div id="collapseTwo" class="panel-collapse collapse">
                                                                   <table class="text-center">
                                                                      <tbody>
                                                                       <tr>
                                                                         <td>제품명</td>
                                                                         <td>갤럭시 노트20 울트라 5G</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td colspan="1">모델명</td>
                                                                         <td colspan="1">SM-N986N</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td>제조사</td>
                                                                         <td>삼성전자</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td>제조국</td>
                                                                         <td>한국</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td colspan="1">KC인증번호</td>
                                                                         <td colspan="1">-</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td colspan="1">디스플레이</td>
                                                                         <td colspan="1">6.9” QHD+Dynamic AMOLED 2X 엣지 디스플레이</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td colspan="1">크기/무게</td>
                                                                         <td colspan="1">164.8 × 77.2 × 8.1 mm / 208g</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td colspan="1">카메라화소</td>
                                                                         <td colspan="1">전면 1,000만 / 후면 1억800만(광각) + 1,200만(초광각) + 1,200만(망원)</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td colspan="1">제조연월일</td>
                                                                         <td colspan="1">-</td>
                                                                       </tr>
                                                                       <tr>
                                                                         <td colspan="1">CPU</td>
                                                                         <td colspan="1">Qualcomm Snapdragon 865+</td>
                                                                       </tr>
                                                                      </tbody>
                                                                   </table>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <!-- payment-method end -->
                                                     <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">place order</button>
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
                         <td class="td-title-2" style="color:#ffffff;">1,800,000</td>
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
   if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     $("#resultPopup").show();
    }
   function showTotal(){
     if($("#mobileWrap").is(":hidden")){
       $("#mobileWrap").show();
     }
     else{
       $("#mobileWrap").hide();
     }
     console.log()
   }

   function menuHighlight(){
     var menu = $("#menu-list").children();
     children = menu[<?php echo $_GET['manufacturer']?>];
     children.classList.add("active");
   }

   menuHighlight();
 </script>


  <script>
    <?php
      require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
      $api = new getForm();
      $items = $api -> select_item($_GET['manufacturer'], $_GET['id']);

      while ($row = $items->fetch(PDO::FETCH_BOTH)){?>
        $("#device-list").append(addItem(
          "<?php echo $row['_id'] ?>",
          "<?php echo $row['name'] ?>",
          "<?php echo $row['model'] ?>",
          separator("<?php echo $row['storage'] ?>"),
          "<?php echo $row['manufacturer_id'] ?>",
          "<?php echo $row['image_url'] ?>"
        ));
      <?php }
    ?>
  </script>
</html>
