<div class="col-lg-9 order-lg-2 order-1">
    <div class="row" style="margin-bottom:30px;">
        <div class="col-lg-12" >
        <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="add()">추가하기</button>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="save()">저장하기</button>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer; background:#207044; float:right;">EXCEL</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" ><div class="tab-content">
            <div class="tab-pane active" id="wishlist">
                <div class="wishlist-content">
                    <form action="#">
                        <div class="table-content table-responsive mb-50">
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
                        </div>
                    </form>
                </div>
            </div>
      </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.3/xlsx.full.min.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/asset/js/bz_online.js"></script>

<script>
  var index = 1;
  function seperator_categoryId(id){
    var carrier, name;
    switch(id){
      case "1" : carrier = 2; name = "5G"; break;
      case "2" : carrier = 2; name = "LTE"; break;
      case "3" : carrier = 2; name = "3G"; break;
      case "4" : carrier = 1; name = "5G"; break;
      case "5" : carrier = 1; name = "LTE"; break;
      case "6" : carrier = 1; name = "3G"; break;
      case "7" : carrier = 3; name = "5G"; break;
      case "8" : carrier = 3; name = "LTE"; break;
      case "9" : carrier = 3; name = "3G"; break;
    }
    return {
      "carrier" : carrier,
      "name" : name
    }
  }

  function mergeTocarrierWithName(carrier, name){
    var categoryID;
    switch(id){
      if(carrier=="1" && name == "5G") categoryID = 4;
      if(carrier=="1" && name == "LTE") categoryID = 5;
      if(carrier=="1" && name == "3G") categoryID = 6;
      if(carrier=="2" && name == "5G") categoryID = 1;
      if(carrier=="2" && name == "LTE") categoryID = 2;
      if(carrier=="2" && name == "3G") categoryID = 3;
      if(carrier=="3" && name == "5G") categoryID = 7;
      if(carrier=="3" && name == "LTE") categoryID = 8;
      if(carrier=="3" && name == "3G") categoryID = 9;

      return categoryID;
    }
    return {
      "carrier" : carrier,
      "name" : name
    }
  }

  function isCarrier(select , target){
    if(select == target) return "selected";
    else return "";
  }

  function isName(select , target){
    if(select == target) return "selected";
    else return "";
  }

  function save(){
    var list =$("#fund-list").children();
    for(var idx=0; idx<list.length; idx++){
      var childs = list[idx].childNodes;
      for(var idx2=1; idx2<childs.length; idx2++){
        var child = childs[idx2].childNodes;
        if(child[0].nodeName == "SELECT") {
          console.log(child[0].options[child[0].selectedIndex].value);
        }
        if(child[0].nodeName == "INPUT"){

        }
      }
      console.log("============================");
    }
  }
  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $item = $api -> select_plan();
    while ($row = $item->fetch(PDO::FETCH_BOTH)){?>
      $("#fund-list").append(addRow(
        index,
        "<?php echo $row['_id']?>",
        "<?php echo $row['category_id']?>",
        "<?php echo $row['name']?>",
        "<?php echo $row['price']?>",
        "<?php echo $row['data']?>",
        "<?php echo $row['call']?>",
        "<?php echo $row['message']?>"
      ));
      index++;
      <?php
    }
  ?>
  function addRow(index, id, category, name, price, data, call, message){
    var obj = seperator_categoryId(category);
    return ""+
    "<tr>"+
    	"<td class=\"product-remove\" style=\"padding:10px 10px;\">"+index+"</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<select id=\"device-storage\" class=\"custom-select\" style=\"margin:0px; width:50px;\">"+
          "<option value=\"1\" " + isCarrier(obj.carrier, 1) + ">KT</option>"+
          "<option value=\"2\" " + isCarrier(obj.carrier,2) + ">SKT</option>"+
          "<option value=\"3\" " + isCarrier(obj.carrier,3) + ">LG</option>"+
        "</select>"+
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<select id=\"device-storage\" class=\"custom-select\" style=\"margin:0px; width:50px;\"\">"+
          "<option value=\"5G\" " + isCarrier(obj.name, "5G") + ">5G</option>"+
          "<option value=\"LTE\" " + isCarrier(obj.name, "LTE") + ">LTE</option>"+
          "<option value=\"3G\" " + isCarrier(obj.name, "3G") + ">3G</option>"+
        "</select>"+
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" name=\"id\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + name + "\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" name=\"id\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + price + "\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" name=\"id\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + data + "\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" name=\"id\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + call + "\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px;\">"+
        "<input type=\"text\" name=\"id\" style=\"margin:0px;\" aria-required=\"true\" value=\"" + message + "\">" +
      "</td>"+
    	"<td class=\"product-remove\" style=\"padding:0px; width:50px;\">"+
        "<i class=\"zmdi zmdi-close\" style=\"cursor:pointer;\"onclick=\"location.href='<?php $_SERVER['DOCUMENT_ROOT']?>/form/deletePlan.php?id=" + id + "'\"></i>" +
      "</td>"+
    "</tr>";
  }

</script>
