<!doctype html>
<?php if(!isset($_SESSION)) session_start();?>
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
         <header class="header-area header-wrapper">
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/header.php'?>
         </header>
         <div class="mobile-menu-area d-block d-lg-none section">
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/menu.php'?>
         </div>
         <!-- BREADCRUMBS SETCTION END -->
         <div class="breadcrumbs-section plr-200 mb-80 section" style="padding-left:0px; padding-right:0px;">
            <div class="breadcrumbs overlay-bg" style="background: url('<?php $_SERVER['DOCUMENT_ROOT']?>/asset/images/custom/index-main01.jpg')">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                           <h1 class="breadcrumbs-title">견적 저장소</h1>
                           <ul class="breadcrumb-list">
                              <li><a>Home</a></li>
                              <li>Cart</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Start page content -->
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
                                             <li><a data-toggle="tab" onclick='updateCarrier(0)' data-carrier="0" style="cursor:pointer;">전체</a></li>
                                             <li><a data-toggle="tab" onclick='updateCarrier(1)' data-carrier="1" style="cursor:pointer;">KT</a></li>
                                             <li><a data-toggle="tab" onclick='updateCarrier(2)' data-carrier="2" style="cursor:pointer;">SKT</a></li>
                                             <li><a data-toggle="tab" onclick='updateCarrier(3)' data-carrier="3" style="cursor:pointer;">LG U+</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-lg-12" >
                                       <div id="store-list" class="blog-details-area">


                                       </div>
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
         <!-- START FOOTER AREA -->
         <footer id="footer" class="footer-area section" style="margin-top:200px;">
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/widget/footer.php'?>
         </footer>
         <!-- END FOOTER AREA -->
      </div>
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/pg/include/include_js.php'?>
   </body>


   <script>
      menuHighlight("<?php echo $_GET['carrier'] ?>");
      var discountObj = {
        "0" : "선택",
        "1" : "공시지원",
        "2" : "선택약정"
      };

      // 통신사를 옮길때, URL을 그대로 가져간다.
      function updateCarrier(carrier){
        // console.log("carrier : " , carrier);
        location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/store.php?&carrier=" + carrier;
      }
      // 통신사 탭메뉴에 하이라이트
      function menuHighlight(carrier){
        var menu = ($("a[data-carrier="+carrier+"]")[0]);
        menu.classList.add("active");
      }


      function addItem(id, url, model, image, name, date, carrier, color, size, plan, installment_period, discount){
        return "" +
        "<div class=\"media author-post box-shadow mb-60\" onclick=\"location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/pg/about_item_v3.php?"+url+"'\" style=\"cursor:pointer;\">"+
           "<div class=\"media-left pr-30\">"+
              "<a href=\"#\"><img class=\"media-object\" src=\"<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/"+model+"/"+image+"\" alt=\"#\" width=\"75px\" height=\"85px\"></a>"+
           "</div>"+
           "<div class=\"media-body\">"+
              "<div class=\"clearfix\">"+
                 "<div class=\"name-commenter f-left\">"+
                    "<h6 class=\"media-heading\"><a href=\"#\">"+name+"</a></h6>"+
                    "<p class=\"mb-10\">"+model+"</p>"+
                 "</div>"+
                 "<ul class=\"reply-delate f-right\">"+
                  "<li><a href=\"#\">"+date+"</a></li>"+
                  "<li><a>&nbsp|&nbsp&nbsp</a></li>"+
                  "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/form/delete_cart.php?id="+id+"\">삭제</a></li>"+
                 "</ul>"+
              "</div>"+
              "<p class=\"mb-0\">"+carrier+"&nbsp&nbsp|&nbsp&nbsp"+size+"&nbsp&nbsp|&nbsp&nbsp"+color+"&nbsp&nbsp|&nbsp&nbsp"+plan+"&nbsp&nbsp|&nbsp&nbsp"+installment_period+"개월 할부&nbsp&nbsp|&nbsp&nbsp"+discountObj[discount]+"</p>"+
           "</div>"+
        "</div>";
      }

      function addEmptyItem(id){
        return "" +
        "<div class=\"media author-post box-shadow mb-60\" >"+
           "<div class=\"media-body\">"+
              "<div class=\"clearfix\">"+
                 "<div class=\"name-commenter f-left\">"+
                 "판매가 끝난 기종입니다."+
                 "</div>"+
                 "<ul class=\"reply-delate f-right\">"+
                    "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/form/delete_cart.php?id="+id+"\">삭제</a></li>"+
                 "</ul>"+
              "</div>"+
           "</div>"+
        "</div>";
      }
      <?php
        // 로그인 상태체크
        // require $_SERVER['DOCUMENT_ROOT'].'/form/loginCheck.php';

        require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
        $api = new getForm();
        if(strcmp($_SESSION['grade'],"user")){
          echo 'alert("고객만 사용가능한 메뉴입니다."); location.replace("/pg/index.php?manufacturer=1");';
        }
        else{
          if(!isset($_SESSION)) session_start();
      		if(isset($_SESSION['id'])){
            $carts = $api -> select_carts($id, $_GET["carrier"]);
            while ($row = $carts->fetch(PDO::FETCH_BOTH)){
              if(empty($row['device_id'])){
                $value = "null";?>
                $("#store-list").append(addEmptyItem("<?php echo $row['_id']?>"));
                <?php
              }
              else{
                $device = $row['device_id'];
                $carrier = $row['carrier_id'];
                $size = $row['size_id'];
                $plan = $row['plan_id'];
                $color = $row['color_id'];
                $date = $row['date'];
                $installment_period = $row['installment_period'];
                $discount = $row['discount'];
                $url = $row['url'];
                $id = $row['_id'];
                $cart = $api -> select_cart($device, $carrier, $size, $plan, $color);
                while ($row = $cart->fetch(PDO::FETCH_BOTH)){?>
                  try{
                    $("#store-list").append(addItem(
                      "<?php echo $id ?>",
                      "<?php echo $url ?>",
                      "<?php echo $row['Device_model'] ?>",
                      "<?php echo $row['Image_url'] ?>",
                      "<?php echo $row['Device_name'] ?>",
                      "<?php echo $date ?>",
                      "<?php echo $row['Carrier_name'] ?>",
                      "<?php echo $row['Image_name'] ?>",
                      "<?php echo $row['Storage_value'] ?>",
                      "<?php echo $row['Plan_name'] ?>",
                      "<?php echo $installment_period ?>",
                      "<?php echo $discount ?>"
                    ));
                  }catch(e){

                  }
                <?php
                }
              }
            }
          }
          else{
            echo "alert(\"로그인정보가 없습니다.로그인화면으로 이동합니다.\");
                  location.replace(\"/\")";
          }
        }
       ?>
   </script>
</html>
