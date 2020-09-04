<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}


	// 회사에맞는 기기목록들
  function select_items($mobile_carrier){
		try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("
        SELECT D._id, D.name, GROUP_CONCAT(S.storage SEPARATOR ',') as storage, D.model, D.image_url, D.manufacturer_id
        FROM device D, device_storage S
        WHERE S.device_id = D._id
        GROUP BY D._id;
      ");
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
  }

	// 기기의 id와 회사에 맞는 기기
  function select_item(){
		try{
			$pdo = $GLOBALS["pdo"];
			$stmt = $pdo->prepare("
        SELECT D._id, D.name, GROUP_CONCAT(S.storage SEPARATOR ',') as storage, D.model, D.image_url, D.manufacturer_id
        FROM device D, device_storage S
        WHERE S.device_id = D._id
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
