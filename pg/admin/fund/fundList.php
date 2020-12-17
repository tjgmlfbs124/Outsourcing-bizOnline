<div class="col-lg-9 order-lg-2 order-1">
    <h3 style="margin-bottom:30px;"> 공시지원금 변경 </h3>
    <div class="row">
        <div class="col-md-12" >
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="uploadFile()">UPLOAD</button>
          <input type="file" id="excelFile" onchange="uploadExcel(event)" style="display:none;"/>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;background:#207044;" onclick="downloadFile_demo()">DOWNLOAD</button>
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
                        <table class="text-center" id="sampletable">
                            <thead>
                                <tr id="table-thead1" style="display:none;">
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
    <form id="signForm" method="POST" action="/form/updateFund.php?support=fund&&newMember=new_number&&MNP=number_move&&Device=device_change" enctype="multipart/form-data" style="visibility:hidden;">
      <input id="text-query" type="text" name="query" >
      <input id="text-fund" type="text" name="fund" >
      <input id="btn_submit" type="submit" name="submit">
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.3/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>

<script>
  //var arr = [['plan_id','id'],['','device_name']];
  var arr = [['ID','plan_id'],['',''],['','device_name','공시<br>지원금','신규<br>가입','번호<br>이동','기기<br>변경']];

  var curDevice_id = 0;
  var deviceCnt = 0;
  var arrayCnt = 0;

  function search(){
    var i = 0;
    for(var idx=0; idx<arr[0].length;){
        $("#table-thead1").append("<th class=\"product-remove\">"+arr[0][idx]+"</th>");
        i++;
        if(idx == 0 || idx == 1 || i == 4){//나중에 고치기
          idx++;
          i = 0;
        }
    }

    for(var idx=0; idx<arr[1].length; idx++){
      if(idx < 2) $("#table-thead2").append("<th class=\"product-remove\">"+arr[1][idx]+"</th>");
      else $("#table-thead2").append("<th colspan =\"4\" class=\"product-remove\">"+arr[1][idx]+"</th>");
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
  		    return '공시지원금 목록.xlsx';
  		},
  		getSheetName : function(){
  			return '공시지원금';
  		},
  		getExcelData : function(){
  			return arr
  		},
  		getWorksheet : function(exportTable){
  			//return XLSX.utils.aoa_to_sheet(this.getExcelData());
        return XLSX.utils.table_to_sheet(exportTable);
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

  function downloadFile_demo(){
    //workbook 생성
    var wb = XLSX.utils.book_new();
    //workbook에 새로만든 워크시트에 이름을 주고 붙인다.
    var exportTable = document.getElementById('sampletable');
    var newWorksheet = fundExcelData.getWorksheet(exportTable);
    XLSX.utils.book_append_sheet(wb, newWorksheet, fundExcelData.getSheetName());
    //엑셀 파일 저장
    var wbout = XLSX.write(wb, {bookType:'xlsx',  type: 'binary'});
    saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), fundExcelData.getExcelFileName());
    
    //XLSX.writeFile(wb, fundExcelData.getExcelFileName());
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
          var query = [];
          var fund = [];
          for (var value of Object.values(rowObj)) {
              console.log(rowObj);
            for (var property in value ) {
              if($.isNumeric(property) && $.isNumeric(value[property])){
                // property : 디바이스 id
                // value['plan_id'] : 요금제 id
                // value[property] : 공시지원금
                console.log("property: "+property);
                query.push(["WHERE `device_id` = " + value['ID'] + " AND `mobile_plan_id` = " + property + " "]);
                fund.push([
                        value[property],
                        value[property+"_1"],
                        value[property+"_2"],
                        value[property+"_3"]
                        ]);
              }
            }
          }

          console.log("query : "+query);
          console.log("fund : "+fund);
          $("#text-query").val(query);
          $("#text-fund").val(fund);
          //console.log("type : " , typeof(fund));
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
    $fundCnt = 0;
    $planCnt = 0;

    //arr[0], arr[1]
    while ($row = $names->fetch(PDO::FETCH_BOTH)){?>
      arr[0].push("<?php echo $row['plan_id']?>");
      arr[1].push("<?php echo $row['plan_name']?>");
      <?php
      $planCnt++;
    }

    //arr[2]
    for($i = 1; $i <$planCnt; $i++){?>
      arr[2].push(arr[2][2],arr[2][3],arr[2][4],arr[2][5]);
    <?php
    }

    //arr[3]부터 배열 늘어남
    while ($row = $plans->fetch(PDO::FETCH_BOTH)){
      $fund = explode(",", $row['fund']);
      $NewNumber = explode(",", $row['new_number']);
      $NumberMove = explode(",", $row['number_move']);
      $DeviceChange = explode(",", $row['device_change']);
    ?>
      console.log("$row['fund'] : "+<?= $row['fund'] ?>+", Cnt: "+<?= count($fund) ?>); 
      arr.push([
                "<?php echo $row['device_id']?>", 
                "<?php echo $row['device_name']?>"
              ]);
    <?php
      while($fundCnt < $planCnt){?>
        arr[3+deviceCnt].push(
                  "<?php echo $fund[$fundCnt] ?>", 
                  "<?php echo $NewNumber[$fundCnt]?>", 
                  "<?php echo $NumberMove[$fundCnt] ?>", 
                  "<?php echo $DeviceChange[$fundCnt] ?>"
                );
    
    <?php
        $fundCnt++;
      }?>
      deviceCnt++;
      <?php
      $fundCnt = 0;
    }
    echo "search();"
  ?>
  console.log("planCnt : "+<?= $planCnt ?>);
  console.log("fundCnt : "+<?= $fundCnt ?>);

</script>