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
    $insert_plan_id = [];
    $fund_plan_id =[];
    // echo $_id."/".$category_id."/".$name."/".$price."/".$data."/".$call."/".$message."<br>";

    if(!strcmp($_id,"''")){
      $sql = $sql."
      BEGIN;
      INSERT INTO mobile_plan(`category_id`, `name`, `price`,`data`, `data_call`, `data_message`)
      VALUES(
      (
        SELECT _id FROM mobile_plan_category
        WHERE mobile_carrier_id=$carrier AND name=$isp
      ),
      $name, $price, $data, $call, $message);
			SET @mPlan_id = (SELECT _id FROM mobile_plan ORDER BY _id DESC LIMIT 1); 
      INSERT INTO support_fund(`device_id`, `mobile_plan_id`, `fund`, `additional_fund`, `new_number`, `number_move`, `device_change`) 
      SELECT D._id as D_id, P._id as P_id, 0 as mFund, 0 as addFund, 0 as newnumber, 0 as numbermove, 0 as devicechange 
        FROM Device D, mobile_plan P 
        WHERE P._id = @mPlan_id;
      COMMIT;";
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

  //  echo "SQL: ".$sql."<br>";
   $model = new getForm();
   $model -> update_plan($sql);
?>

</html>
