<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}


	// 회사에맞는 기기목록들
  function select_items($manufacturer){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql ="
			SELECT M.name as m_name, D.*
			FROM manufacturer M, device D
			WHERE M._id = ".$manufacturer.";
      ";
			echo $sql;
			$stmt = $pdo->prepare("
			SELECT M.name as m_name, D.*
			FROM manufacturer M, device D
			WHERE M._id = D.manufacturer_id;
      ");
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
  }

	// 기기의 id와 회사에 맞는 기기
  function select_item($id, $mobile_carrier){
		try{
			$pdo = $GLOBALS["pdo"];
			// $stmt = $pdo->prepare("
			// 	SELECT D._id, D.name, GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(C.name,":",C.image_url,":",C.color,":",C.carrier_id) as color
			// 	FROM device D, device_storage S, device_image C
			// 	WHERE S.device_id = %{device._id}
			// 	AND C.device_id = %{device._id}
			// 	AND (C.carrier_id = %{mobile_carrier.id} OR C.carrier_id = 0)
			// 	GROUP BY D._id;
      // ");
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
  }

}

?>
