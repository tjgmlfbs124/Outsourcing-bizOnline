<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}


	// 회사에맞는 기기목록들
  function select_items($manufacturer){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql ="
			SELECT D._id, D.name, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as storage, D.release, D.manufacturer_id
			FROM device D, device_storage S
			WHERE S.device_id = D._id AND D.manufacturer_id = ".$manufacturer."
			GROUP BY D._id;
      ";
			$stmt = $pdo->prepare($sql);
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
			$stmt = $pdo->prepare("
				SELECT * GROUP_CONCAT(DISTINCT S.storage,":",S.price) as price, GROUP_CONCAT(C.name,":",C.image_url,":",C.color,":",C.carrier_id) as color
				FROM device D, device_storage S, device_image C
				WHERE S.device_id = ".$id."
				AND C.device_id = ".$id."
				AND (C.carrier_id = ".$mobile_carrier." OR C.carrier_id = 0)
				GROUP BY D._id;
      ");
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
  }

}

?>
