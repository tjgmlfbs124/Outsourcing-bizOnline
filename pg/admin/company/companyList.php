
<div class="col-lg-9 order-lg-2 order-1">
    <div class="tab-content">
       <div class="tab-pane active" id="checkout">
          <div class="checkout-content box-shadow p-30">
             <div class="row">
                <div class="col-lg-12" >
                   <div class="product-tab pro-tab-menu pro-tab-menu-2 text-left" style="justify-content:flex-end;">
                      <!-- Nav tabs -->
                      <ul id="menu-list" class="nav" style="color:#555;">
                         <li><a data-toggle="tab" onclick='onGrade(0)' data-grade="0" style="cursor:pointer;">전체</a></li>
                         <li><a data-toggle="tab" onclick='onGrade("manager")' data-grade="manager" style="cursor:pointer;">관리자</a></li>
                         <li><a data-toggle="tab" onclick='onGrade("company")' data-grade="company" style="cursor:pointer;">사업자</a></li>
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
  // 통신사 탭메뉴에 하이라이트
  menuHighlight("<?php echo $_GET['grade']?>");
  function menuHighlight(carrier){
    var menu = ($("a[data-grade="+carrier+"]")[0]);
    menu.classList.add("active");
  }
  function onGrade(grade){
    location.href="<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/menu.php?dir=company&sub=companyList&grade=" + grade
  }
  function addItem(id, name, userid, company, grade, phone){
    return "" +
    "<div class=\"media author-post box-shadow mb-60\" style=\"margin-bottom:30px; style=\"cursor:pointer;\">"+
       "<div class=\"media-body\">"+
          "<div class=\"clearfix\">"+
             "<div class=\"name-commenter f-left\">"+
                "<h6 class=\"media-heading\"><a href=\"#\">"+name+" (" + userid +  ")</a></h6>"+
                "<p class=\"mb-10\">"+company+"</p>"+
             "</div>"+
             "<ul class=\"reply-delate f-right\">"+
              "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/pg/admin/menu.php?dir=company&sub=updateCompany&id="+id+"\">변경</a></li>"+
              "<li><a>&nbsp|&nbsp</a></li>"+
              "<li><a href=\"<?php $_SERVER['DOCUMENT_ROOT']?>/form/deleteCompany.php?id="+ id + "\">삭제</a></li>"+
             "</ul>"+
          "</div>"+
          "<p class=\"mb-0\">연락처 : "+phone+"&nbsp&nbsp|&nbsp&nbsp구분 : " + gradeIndexToName(grade) + "</p>"+
       "</div>"+
    "</div>";
  }

  function gradeIndexToName(grade){
    var name = "";
    switch (grade) {
      case "manager":
        name = "관리자";
        break;
      case "company":
        name = "사업자";
        break;
      default:
        name = "알수없음";
    }
    return name;
  }
  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $result = $api -> select_companys($_GET['grade']);
    while ($row = $result ->fetch(PDO::FETCH_BOTH)){?>
      $("#company-list").append(addItem(
        "<?php echo $row['_id']?>",
        "<?php echo $row['name']?>",
        "<?php echo $row['userid']?>",
        "<?php echo $row['company']?>",
        "<?php echo $row['grade']?>",
        "<?php echo $row['phone']?>"
      ));
    <?php
    }
  ?>

</script>

</html>
