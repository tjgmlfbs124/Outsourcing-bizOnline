
<div class="col-lg-9 order-lg-2 order-1">
    <div class="tab-content">
       <div class="tab-pane active" id="checkout">
          <div class="checkout-content box-shadow p-30">
             <div class="row">
                <div class="col-lg-12" >
                   <div class="product-tab pro-tab-menu pro-tab-menu-2 text-left" style="justify-content:flex-end;">
                      <!-- Nav tabs -->
                      <ul id="menu-list" class="nav" style="color:#555;">
                         <li><a class="active" data-toggle="tab" data-notice="0" style="cursor:pointer;">전체</a></li>
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

  function addItem(id, title, date, writer){
    return "" +
    "<div class=\"media author-post box-shadow mb-60\" style=\"margin-bottom:30px; style=\"cursor:pointer;\" >"+
       "<div class=\"media-body\">"+
          "<div class=\"clearfix\">"+
             "<div class=\"name-commenter f-left\">"+
                "<h6 class=\"media-heading\"><a href=\"#\">"+title+"</a></h6>"+
                "<p class=\"mb-10\">"+writer+"</p>"+
             "</div>"+
             "<ul class=\"reply-delate f-right\">"+
              "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/menu.php?dir=notice&sub=updateNotice&id="+id+"\">변경</a></li>"+
              "<li><a>&nbsp|&nbsp</a></li>"+
              "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/form/deleteNotice.php?id="+ id + "\">삭제</a></li>"+
             "</ul>"+
          "</div>"+
          "<p class=\"mb-0\">등록일 : " + date + "</p>"+
       "</div>"+
    "</div>";
  }

  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $id = isset($_SESSION['adminid']) ? $_SESSION['adminid'] : false;
    $result = $api -> select_notices();
    while ($row = $result ->fetch(PDO::FETCH_BOTH)){?>
      $("#company-list").append(addItem(
        "<?php echo $row['_id']?>",
        "<?php echo $row['title']?>",
        "<?php echo $row['date']?>",
        "<?php echo $row['name']?>"
      ));
    <?php
    }
  ?>

</script>

</html>
