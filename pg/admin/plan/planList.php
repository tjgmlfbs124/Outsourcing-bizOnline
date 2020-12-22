<div class="col-lg-9 order-lg-2 order-1">
    <h3 style="margin-bottom:30px;"> 요금제 변경 </h3>
    <div class="row" style="position:fixed; bottom:0px; z-index:100; width:100%;" >
        <div class="col-lg-12" style="background:rgba(255,255,255,0.8)">
        <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer; margin:0px;" onclick="add()">추가하기</button>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer; margin:0px;" onclick="save()">저장하기</button>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer; background:#207044; margin:0px;" >EXCEL</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" ><div class="tab-content">
            <div class="tab-pane active" id="wishlist">
                <div class="wishlist-content">
                    <div class="table-content table-responsive mb-50">
                        <span> ※ 요금제 삭제시, 요금제와 관련된 추가보조금, 공시지원금도 함께 삭제됩니다.</span>
                        <table class="text-center">
                            <thead>
                                <tr>
                                  <th class="product-remove">번호</th>
                                  <th class="product-remove">통신사</th>
                                  <th class="product-remove">가입망</th>
                                  <th class="product-remove">요금제명</th>
                                  <th class="product-remove">월 요금</th>
                                  <th class="product-remove">데이터</th>
                                  <th class="product-remove">전화</th>
                                  <th class="product-remove">문자</th>
                                  <th class="product-remove">삭제</th>
                                </tr>
                            </thead>
                            <tbody id="fund-list">
                            </tbody>
                        </table>

                        <form id="signForm" method="POST" action="/form/updatePlan.php" enctype="multipart/form-data" style="visibility:hidden;">
                          <input id="plan-array" type="text" name="data" >
                          <input id="planForm" type="submit" name="submit">
                        </form>
                    </div>
                </div>
            </div>
      </div>
        </div>
    </div>
</div>

<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/bz_online.js"></script>

<script>
  var index = 1;

  function isSelect(select , target){
    if(select == target) return "selected";
    else return "";
  }

  // 요금제 추가
  function add(){
    index++;
    $([document.documentElement, document.body]).animate({
        scrollTop: $("footer").offset().top
    }, 100);
    $("#fund-list").append(addRow(index, "", 0, 2, "5G", "", 0, "", "", ""));
  }

  function save(){
    var list =$("#fund-list").children();
    var jsonArray = new Array();
    for(var idx=0; idx<list.length; idx++){
      var childs = list[idx].childNodes;
      var jsonObject = {
        "name" : "",
        "price" : "",
        "data" : "",
        "call" : "",
        "message" : ""
      };
      // console.log("list[idx] : " , list[idx]);
      jsonObject.category_id = list[idx].getAttribute("data-categoryid");
      jsonObject._id = list[idx].getAttribute("data-id");

      for(var idx2=1; idx2<childs.length-1; idx2++){
        var child = childs[idx2].childNodes;
        if(child[0].nodeName == "INPUT"){ var column = child[0].getAttribute("data-column");
          jsonObject[column] = child[0].value;
        }

        if(child[0].nodeName == "SELECT"){
          var column =child[0].getAttribute("data-column")
          var value = child[0].options[child[0].selectedIndex].value;
          jsonObject[column] = child[0].value;
        }
      }
      jsonArray.push(jsonObject);
    }
    $("#plan-array").val(JSON.stringify(jsonArray));

    console.log("JSON.stringify(jsonArray) : " , JSON.stringify(jsonArray))
    $("#planForm").click();
  }


  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $item = $api->select_plan();
    while ($row = $item->fetch(PDO::FETCH_BOTH)){?>
      $("#fund-list").append(addRow(
        index,
        "<?php echo $row['_id'] ?>",
        "<?php echo $row['category_id'] ?>",
        "<?php echo $row['carrier_id'] ?>",
        "<?php echo $row['cat_name'] ?>",
        "<?php echo $row['name'] ?>",
        "<?php echo $row['price'] ?>",
        "<?php echo $row['data'] ?>",
        "<?php echo $row['data_call'] ?>",
        "<?php echo $row['data_message'] ?>"
      ));
      index++;
      <?php
    }
  ?>

  //행 추가
  function addRow(index, id, category, carrier, isp, name, price, data, call, message){
    return ""+
    "<tr data-categoryid=\""+category+"\" data-id=\""+id+"\" >"+
    	"<td class=\"product-remove\" style=\"padding:10px 10px;\">"+index+"</td>"+
    	"<td class=\"product-remove\" style=\"padding:5px;\" >"+
        "<select class=\"custom-select\" style=\"margin:0px; width:60px;\" data-column=\"carrier\">"+
          "<option value=\"1\" " + isSelect(carrier, 1) + ">KT</option>"+
          "<option value=\"2\" " + isSelect(carrier,2) + ">SKT</option>"+
          "<option value=\"3\" " + isSelect(carrier,3) + ">LG</option>"+
        "</select>"+
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:5px;\">"+
        "<select class=\"custom-select\" style=\"margin:0px; width:60px;\" data-column=\"isp\">"+
          "<option value=\"5G\" " + isSelect(isp, "5G") + ">5G</option>"+
          "<option value=\"LTE\" " + isSelect(isp, "LTE") + ">LTE</option>"+
          "<option value=\"3G\" " + isSelect(isp, "3G") + ">3G</option>"+
        "</select>"+
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + name + "\" data-column=\"name\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + price + "\" data-column=\"price\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + data + "\" data-column=\"data\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + call + "\" data-column=\"call\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + message + "\" data-column=\"message\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px; width:50px;\">"+
        "<i class=\"zmdi zmdi-close\" style=\"cursor:pointer;\"onclick=\"location.href='<?php $_SERVER['DOCUMENT_ROOT'] ?>/form/deletePlan.php?id=" + id + "'\"></i>" +
      "</td>"+
    "</tr>";
  }

</script>
