<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  $device_id = $_GET['id'];
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
      echo "<br>".$key."/".$value."<br>";
      if(strpos($key,"Name") !== false){
        $deviceSizes = $deviceSizes."(@mDevice_id,  \"$value\",";
      }
      if(strpos($key,"Price") !== false){
        $deviceSizes = $deviceSizes." $value ),";
      }
      if(strpos($key,"Id") !== false){
        echo "<br>".$value."<br>";
      }
    }

    // 키값에 plan_category라는 이름이 있을경우 => plan_category 아이디 Query문 생성
    if(strpos($key,"plan_category") !== false){
      $devicePlanCategories = $devicePlanCategories."(@mDevice_id, $value),";
    }
  }


  echo "files : " .$files."<br>";
  echo "thumnail : " .$thumnail."<br>";
  echo "manufacturer : " .$manufacturer."<br>";
  echo "deviceName : " .$deviceName."<br>";
  echo "deviceModel : " .$deviceModel."<br>";
  echo "deviceColors : " .$deviceColors."<br>";
  echo "deviceSizes : " .$deviceSizes."<br>";
  echo "devicePlanCategories : " .$devicePlanCategories."<br>";
  echo "device_display : " .$device_display."<br>";
  echo "device_camera : " .$device_camera."<br>";
  echo "device_cpu : " .$device_cpu."<br>";
  echo "device_size : " .$device_size."<br>";
  echo "device_release : " .$device_release."<br>";

  $sql = "
  BEGIN;
  UPDATE `device`
  SET `name`=\"$deviceName\",
  `model`=\"$deviceModel\",
  `spec_display`=\"$device_display\",
  `spec_cam`=\"$device_camera\",
  `spec_cpu`=\"$device_cpu\",
  `spec_size`=\"$device_size\",
  `manufacturer_id`=$manufacturer,
  `release` = DATE_FORMAT('$device_release','%Y-%m-%d')
  WHERE (`_id`=$device_id);";

  echo $sql."<br>";
?>

</html>
