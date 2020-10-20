<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  global $sql;

  $data = $_POST['data'];
  $jsonArray= json_decode($data , true);
  for($i = 0 ; $i < count($jsonArray) ; $i++){
    $_id = "'".$jsonArray[$i]['_id']."'";
    $name = "'".$jsonArray[$i]['name']."'";
    $price = "'".$jsonArray[$i]['price']."'";
    $data = "'".$jsonArray[$i]['data']."'";
    $call = "'".$jsonArray[$i]['call']."'";
    $message = "'".$jsonArray[$i]['message']."'";
    $carrier = "'".$jsonArray[$i]['carrier']."'";
    $isp = "'".$jsonArray[$i]['isp']."'";
    $category_id = "'".$jsonArray[$i]['category_id']."'";
    // echo $_id."/".$category_id."/".$name."/".$price."/".$data."/".$call."/".$message."<br>";

    if(!strcmp($_id,"''")){
      $sql = $sql."INSERT INTO mobile_plan(`category_id`, `name`, `price`,`data`, `data_call`, `data_message`)
      VALUES(
      (
        SELECT _id FROM mobile_plan_category
        WHERE mobile_carrier_id=$carrier AND name=$isp
      ),
      $name, $price, $data, $call, $message);";
    }
    else{
      $sql = $sql."UPDATE mobile_plan
            SET `category_id`=$category_id,
              `name`=$name,
              `price`=$price,
              `data`=$data,
              `data_call`=$call,
              `data_message`=$message
            WHERE `_id`=$_id".";";
    }

  }
  $model = new getForm();
  $model -> update_plan($sql);

?>

</html>
