
<div class="col-lg-9 order-lg-2 order-1">
     <!-- Tab panes -->
     <div class="tab-content">
        <div class="tab-pane active" id="checkout">
           <div class="checkout-content box-shadow p-30">
              <div class="row">
                 <div class="col-lg-12" >
                    <div class="product-tab pro-tab-menu pro-tab-menu-2 text-left" style="justify-content:flex-end;">
                       <!-- Nav tabs -->
                       <ul id="menu-list" class="nav" style="color:#555;">
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
<script>
    function addItem(id, model, name, date, size){
      return "" +
      "<div class=\"media author-post box-shadow mb-60\">"+
         "<div class=\"media-left pr-30\">"+
            "<a ><img class=\"media-object\" src=\"<?php $_SERVER['DOCUMENT_ROOT']?>/image/phone/"+model+"/thumnail.jpg\" alt=\"#\" width=\"75px\" height=\"85px\"></a>"+
         "</div>"+
         "<div class=\"media-body\">"+
            "<div class=\"clearfix\">"+
               "<div class=\"name-commenter f-left\">"+
                  "<h6 class=\"media-heading\"><a>"+name+"</a></h6>"+
                  "<p class=\"mb-10\">"+model+"</p>"+
               "</div>"+
               "<ul class=\"reply-delate f-right\">"+
                  "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/menu.php?dir=device&sub=updateDevice&id="+id+"\">"+"변경"+"</a></li>"+
                  "<li><a>"+"&nbsp|&nbsp"+"</a></li>"+
                  "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/form/deleteDevice.php?id="+id+"&manufacture=<?php echo $_GET['manufacturer']?>\">"+"삭제"+"</a></li>"+
               "</ul>"+
            "</div>"+
            "<p class=\"mb-0\">용량 : "+size+"&nbsp&nbsp|&nbsp&nbsp 출시일 : "+date+"</p>"+
         "</div>"+
      "</div>";
    }

    // 통신사 탭메뉴에 하이라이트
    function menuHighlight(manufacturer){
      var menu = ($("a[data-manufacturer="+manufacturer+"]")[0]);
      menu.classList.add("active");
    }

    function onTabmenu(id){
      location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/menu.php?sub=deviceManager&manufacturer="+id;
    }

  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
    if($id){
      $result = $api -> select_manufactures();
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
        $("#menu-list").append("<li onclick=\"onTabmenu(<?php echo $row['_id']?>)\"><a data-toggle=\"tab\" data-manufacturer=\"<?php echo $row['_id']?>\" style=\"cursor:pointer;\" ><?php echo $row['name']?></a></li>")
      <?php
      }
      $result = $api -> select_items($_GET['manufacturer']);
      while ($row = $result->fetch(PDO::FETCH_BOTH)){?>
          $("#store-list").append(addItem(
            "<?php echo $row['_id']?>",
            "<?php echo $row['model']?>",
            "<?php echo $row['name']?>",
            "<?php echo $row['release']?>",
            "<?php echo $row['storage']?>"
          ));
      <?php
      }
    }
    else{

    }
   ?>

   menuHighlight("<?php echo $_GET['manufacturer']?>");
 </script>
