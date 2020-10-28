<div class="col-lg-9 order-lg-2 order-1">
    <h3 style="margin-bottom:30px;"> 추가보조금 변경 </h3>
    <div class="row">
        <div class="col-md-12" >
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="uploadFile()">UPLOAD</button>
          <input type="file" id="excelFile" onchange="uploadExcel(event)" style="display:none;"/>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;background:#207044;" onclick="downloadFile()">DOWNLOAD</button>
        </div>
    </div>
    <div class="row" style="margin-top:30px;">
        <div class="col-md-12">
          <div class="tab-content" >
            <div class="tab-pane active" id="wishlist">
                <div class="wishlist-content">
                    <div class="table-content table-responsive mb-50" style="max-height :500px; overflow:auto;">
                      <span>
                        요금삭제나, 기기삭제는 다른 메뉴를 통해 관리해야 합니다. <br>
                        엑셀파일에서는 금액수정만 가능합니다.
                      </span>
                        <table class="text-center">
                            <thead>
                                <tr id="table-thead1">
                                </tr>
                                <tr id="table-thead2">
                                </tr>
                            </thead>
                            <tbody id="fund-list">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <form id="signForm" method="POST" action="/form/updateFund.php?support=additional_fund" enctype="multipart/form-data" style="visibility:hidden;">
      <input id="text-query" type="text" name="query" >
      <input id="btn_submit" type="submit" name="submit">
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.3/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>

<script>
  var arr = [['plan_id','id'],['','device_name']];
  var curDevice_id = 0;
  var deviceCnt = 0;

  function search(){
    for(var idx=0; idx<arr[0].length; idx++){
      $("#table-thead1").append("<th class=\"product-remove\">"+arr[0][idx]+"</th>");
    }
    for(var idx=0; idx<arr[1].length; idx++){
      $("#table-thead2").append("<th class=\"product-remove\">"+arr[1][idx]+"</th>");
    }
    for(var row=2; row<arr.length; row++){
      var html ="<tr>";
      for(var col=0; col<arr[row].length; col++){
        html += "<td>"+ arr[row][col]+"</td>";
      }
      html += "</tr>";
      $("#fund-list").append(html);
    }
  }

  // input Form  클릭
  function uploadFile(){
    $("#excelFile").click();
  }


  // 공시지원금 EXCEL 데이터
  var fundExcelData = {
  		getExcelFileName : function(){
  		    return '추가보조금 목록.xlsx';
  		},
  		getSheetName : function(){
  			return '추가보조금';
  		},
  		getExcelData : function(){
  			return arr
  		},
  		getWorksheet : function(){
  			return XLSX.utils.aoa_to_sheet(this.getExcelData());
  		}
  }

  // EXCEL EXPORT
  function downloadFile(){
    // step 1. workbook 생성
    var wb = XLSX.utils.book_new();
    // step 2. 시트 만들기
    var newWorksheet = fundExcelData.getWorksheet();
    // step 3. workbook에 새로만든 워크시트에 이름을 주고 붙인다.
    XLSX.utils.book_append_sheet(wb, newWorksheet, fundExcelData.getSheetName());
    // step 4. 엑셀 파일 만들기
    var wbout = XLSX.write(wb, {bookType:'xlsx',  type: 'binary'});
    // step 5. 엑셀 파일 내보내기
    saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), fundExcelData.getExcelFileName());

  }

  // 엑셀 업로드
  function uploadExcel(event){
    var input = event.target;
    var reader = new FileReader();
    try{
      reader.onload = function(){
        var fileData = reader.result;
        var wb = XLSX.read(fileData, {type : 'binary'});
        wb.SheetNames.forEach(function(sheetName){
          var rowObj=XLSX.utils.sheet_to_json(wb.Sheets[sheetName]);
          var query = "";
          for (var value of Object.values(rowObj)) {
            for (var property in value ) {
              if($.isNumeric(property) && $.isNumeric(value[property])){
                // property : 디바이스 id
                // value['plan_id'] : 요금제 id
                // value[property] : 공시지원금
                query += "WHEN `device_id` = " + property + " AND `mobile_plan_id` = " + value['plan_id'] + " THEN " +  value[property] + " ";
              }
            }
          }

          console.log(query);
          $("#text-query").val(query);
          $("#btn_submit").click();
        })
      };
      reader.readAsBinaryString(input.files[0]);
    }
    catch(e){
      console.log("e : " , e)
    }
  }

  function s2ab(s) {
      var buf = new ArrayBuffer(s.length); //convert s to arrayBuffer
      var view = new Uint8Array(buf);  //create uint8array as viewer
      for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF; //convert to octet
      return buf;
  }


  <?php
    require $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
    $api = new getForm();
    $names = $api -> select_item_name();
    $plans = $api -> select_funds();
    while ($row = $names->fetch(PDO::FETCH_BOTH)){?>
      arr[0].push("<?php echo $row['_id']?>");
      arr[1].push("<?php echo $row['name']?>");
      <?php
    }
    while ($row = $plans->fetch(PDO::FETCH_BOTH)){?>
      if(curDevice_id != "<?php echo $row['device_id']?>") {
        curDevice_id = "<?php echo $row['device_id']?>"
        deviceCnt=0;
      }
      if(curDevice_id==1) {
        arr.push(["<?php echo $row['plan_id']?>", "<?php echo $row['plan_name']?>"]);
      }
      arr[2+deviceCnt].push("<?php echo $row['additional_fund']?>");
      deviceCnt++;
      <?php
    }
    echo "search();"
  ?>
</script>
