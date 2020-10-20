<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $files = $_FILES;
  $thumnail = $_FILES['thumnailImage']["tmp_name"];
  $manufacturer = $_POST['manufacturer'];
  $deviceName = $_POST['name'];
  $deviceModel = $_POST['modelName'];
  $deviceColors = "";
  $deviceSizes= "";
  $devicePlanCategories = "";
  $device_display = $_POST['display'];
  $device_camera = $_POST['camera'];
  $device_cpu = $_POST['cpu'];
  $device_size = $_POST['size'];
  $device_release = $_POST['release'];

  // size에 대한 키값을 찾아서 size에 관한 SQL Query문 작성
  foreach ($_POST as $key => $value) {
    // 키값에 size라는 이름이 있을경우 => 용량이름과 가격 Query문 생성
    if(strpos($key,"size") !== false){
      if(strpos($key,"Name") !== false){
        $deviceSizes = $deviceSizes."(@mDevice_id,  \"$value\",";
      }
      if(strpos($key,"Price") !== false){
        $deviceSizes = $deviceSizes." $value ),";
      }
    }
    // 키값에 plan_category라는 이름이 있을경우 => plan_category 아이디 Query문 생성
    if(strpos($key,"plan_category") !== false){
      $devicePlanCategories = $devicePlanCategories."(@mDevice_id, $value),";
    }
  }

  // input type이 FLIES인 키값을 모두 검색하여 이미지화
  $all_keys = array_keys($files);
  foreach ($all_keys as $key => $value) {
    global $deviceColors;
    // 썸네임 이미지가 아닌 사진파일
    if(strcmp($value,"thumnailImage")){
        generateImageFile("color","colorImage".$key, $files[$value]);
        $deviceColors = $deviceColors."(@mDevice_id, \"".$_POST["colorName".$key]."\", \"".basename($files[$value]["name"])."\", \"000000\", $manufacturer),";
    }
    // 썸네일인 이미지파일
    else{
      generateImageFile("thumnail","colorImage".$key, $files[$value]);
    }
  }

  function generateImageFile($type, $colorName, $colorImage){
    global $deviceModel, $deviceColors, $manufacturer ;
    $filename = $type == "color" ? basename($colorImage["name"]) : "thumnail.jpg";

    // 모델명으로 폴더 생성
    makeDirectory($_SERVER['DOCUMENT_ROOT']."image/phone/".$deviceModel."/");

    $target_file =  $_SERVER['DOCUMENT_ROOT']."image/phone/".$deviceModel."/".$filename;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($colorImage["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else {
      if (move_uploaded_file($colorImage["tmp_name"], $target_file)) {
        echo "The file ". basename($colorImage["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    echo "<br><br>";

  }

  function makeDirectory($path){
    if(!is_dir($path)) {
      mkdir($path, 0777, true);
    }
  }

  // echo "<br>thumnail : ".$thumnail."<br>";
  // echo "manufacturer : ".$manufacturer."<br>";
  // echo "deviceName : ".$deviceName."<br>";
  // echo "deviceModel : ".$deviceModel."<br>";
  //
  // echo "color01 : ".$color01."<br>";
  // echo "colorImage01 : ".$colorImage01."<br>";
  // echo "colorPlan01 : ".$colorPlan01."<br>";
  //
  // echo "device_display : ".$device_display."<br>";
  // echo "device_cam : ".$device_camera."<br>";
  // echo "device_cpu : ".$device_cpu."<br>";
  // echo "device_size : ".$device_size."<br>";
  // echo "device_release : ".$device_release."<br>";

  $model = new getForm();
  $model -> add_device(
    $deviceName,
    $deviceModel,
    $_SERVER['DOCUMENT_ROOT']."image/phone/".$deviceModel."/"."thumnail.jpg",
    $device_display,
    $device_camera,
    $device_cpu,
    $device_size,
    $manufacturer,
    $device_release,
    substr($deviceColors,0,-1).";",
    substr($deviceSizes,0,-1).";",
    substr($devicePlanCategories,0,-1).";"

  );

?>

</html>
