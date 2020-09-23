<div class="col-lg-9 order-lg-2 order-1">
    <div class="row" style="float:right;">
        <div class="col-md-12" >
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;">DB 조회</button>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="uploadFile()">UPLOAD</button>
          <input type="file" id="excelFile" onchange="excelExport(event)" style="display:none;"/>
          <button class="submit-btn-1 mt-30 btn-hover-1" style="cursor:pointer;" onclick="downloadFile()">DOWNLOAD</button>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.3/xlsx.full.min.js"></script>

<script>
  function uploadFile(){
    $("#excelFile").click();
  }

  function downloadFile(){

  }


  function excelExport(event){
    var input = event.target;
    var reader = new FileReader();
    try{
      reader.onload = function(){
          var fileData = reader.result;
          var wb = XLSX.read(fileData, {type : 'binary'});
          wb.SheetNames.forEach(function(sheetName){
            var rowObj =XLSX.utils.sheet_to_json(wb.Sheets[sheetName]);
            console.log(JSON.stringify(rowObj));
          })
      };
      console.log("input.files : " , input.files);
      reader.readAsBinaryString(input.files[0]);
    }
    catch(e){
      console.log("e : " , e)
    }
  }
</script>
