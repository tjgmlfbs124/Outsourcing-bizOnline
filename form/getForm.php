<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}


	// 회사에맞는 기기목록들
  function select_items($manufacturer){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql ="
				SELECT D._id, D.name, D.model, D.image_url, GROUP_CONCAT(S.storage SEPARATOR ',') as storage, D.release, D.manufacturer_id
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

	// 기기 id로 특정 디바이스 조회
  function select_item($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("
				SELECT D.*, GROUP_CONCAT(DISTINCT S.storage,\":\",S.price) as price, GROUP_CONCAT(DISTINCT C._id,\":\",C.name,\":\",C.image_url,\":\",C.color) as color
				FROM device D, device_storage S, device_image C
				WHERE S.device_id = ".$id."
				AND C.device_id = ".$id."
				AND D._ID = ".$id."
				GROUP BY D._id;
      ");
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
  }

	/**
		* 기기와 통신사에 맞는 요금제 조회
		* @param
		* id : 디바이스 ID
		* carrier : 통신사 ID
		*/
  function select_plans($id, $carrier){
		try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("
				SELECT P.*
				FROM mobile_plan P
				LEFT JOIN device_mobile_category M on P.category_id = M.category_id
				WHERE M.device_id = ".$id."
				AND M.category_id =
					ANY(SELECT _id
					FROM mobile_plan_category
					WHERE mobile_carrier_id = ".$carrier.");
      ");
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	  }

}

?>
