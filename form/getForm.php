<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/pdo.php';
class getForm{
	function __construct(){}

	function renderAlertWithView($msg, $url){
		echo '<script>
					alert("'.$msg.'");
					location.replace("'.$url.'");
					</script>';
	}

	function renderView($url){
		echo '<script>
					location.replace("'.$url.'");
					</script>';
	}

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
			$sql = "
				SELECT D.*, GROUP_CONCAT(DISTINCT S._id,\":\",S.storage,\":\",S.price) as price, GROUP_CONCAT(DISTINCT C._id,\":\",C.name,\":\",C.image_url,\":\",C.color) as color
				FROM device D, device_storage S, device_image C
				WHERE S.device_id = ".$id."
				AND C.device_id = ".$id."
				AND D._ID = ".$id."
				GROUP BY D._id;
      ";
			$stmt = $pdo->prepare($sql);
			// echo $sql;
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
			$sql = "
				SELECT P.*
				FROM mobile_plan P
				LEFT JOIN device_mobile_category M on P.category_id = M.category_id
				WHERE M.device_id = ".$id."
				AND M.category_id =
					ANY(SELECT _id
					FROM mobile_plan_category
					WHERE mobile_carrier_id = ".$carrier.");
      	";
			$stmt = $pdo->prepare($sql);
				$stmt->execute();
				return $stmt;
			}catch(Exception $e){
				echo $e;
			}
	  }

	// 회원가입
	function insert_user($id, $password, $phone, $name, $image, $date, $recommender){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "
					INSERT INTO user (userid,password,phone,name,image_url,request_date,recommender)
					VALUES(\"$id\",\"$password\",\"$phone\",\"$name\",\"$image\",\"$date\",$recommender);";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("추가되었습니다.", "/");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 로그인
	function select_user($id, $password){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM user WHERE userid=\"".$id."\" AND password=\"".$password."\"";

			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)){
				$approval_date = $row['approval_date'];
				$user_number = $row['_id'];
			}

			if(!strcmp($approval_date, "")){ // 승인날짜가 비워져있다면
				$this->renderAlertWithView("승인처리중인 계정입니다.", "/");
			}
			else{	// 승인날짜가 들어있다면
				session_start();
				$_SESSION['id']=$user_number;
				$this->renderView("/pg/index.php?manufacturer=1");
			}
		}catch(Exception $e){
			echo $e;
		}
	}

	// 견적 저장
	function insert_cart_item($id, $url, $device_id, $carrier, $installment_period, $discount, $size, $plan, $color, $date){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "INSERT INTO user_estimate(url, user_id, device_id, carrier_id, installment_period, discount, size_id, plan_id, color_id, date)
			VALUES(\"$url\",\"$id\",\"$device_id\",\"$carrier\",\"$installment_period\",\"$discount\",\"$size\",\"$plan\",\"$color\",\"$date\");";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("추가되었습니다.", "/pg/about_item_v3.php?".$url);
		}catch(Exception $e){
			echo $e;
		}
	}

	// 저장한 견적들 조회
	function select_carts($id, $carrier){
		try{
			$pdo = $GLOBALS["pdo"];
			if(!strcmp($carrier,"0")){
					$sql = "SELECT * FROM user_estimate WHERE user_id=".$id;
			}
			else{
				$sql = "SELECT * FROM user_estimate WHERE user_id=".$id." AND carrier_id=".$carrier;
			}
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 저장한 견적(1개) 조회
	function select_cart($device, $carrier, $size, $plan, $color){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT
						   -- De._id as Device_id,
						   De.name as Device_name,
						   De.model as Device_model,
						   -- De.image_url as Device_img,
						   -- De.spec_display as Device_display,
						   -- De.spec_cam as Device_cam,
						   -- De.spec_cpu as Device_cpu,
						   -- De.spec_size as Device_size,
						   -- De.manufacturer_id as Device_manu,
						   -- De.release as Device_release,
						   -- Ca._id as Carrier_id,
						   Ca.name as Carrier_name,
						   -- Sto._id as Storage_id,
						   Sto.storage as Storage_value,
						   -- Sto.price as Storage_price,
						   -- Img._id as Image_id,
						   Img.name as Image_name,
						   Img.image_url as Image_url,
						   -- Pl._id as Plan_id,
						   Pl.name as Plan_name
						   -- Pl.price as Plan_price,
						   -- Pl.data as Plan_data,
						   -- Pl.call as Plan_call,
						   -- Pl.message as Plan_message
						FROM device De, mobile_carrier Ca ,device_storage Sto, device_image Img, mobile_plan Pl
						WHERE De._id=".$device."
						   AND Ca._id=".$carrier."
						   AND Sto._id=".$size."
						   AND Img._id=".$color."
						   AND Pl._id=".$plan."";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	function select_admin($id, $password){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * FROM manager WHERE userid=\"".$id."\" AND password=\"".$password."\"";

			$stmt = $pdo->prepare($sql);
			$stmt->execute();

			while ($row = $stmt->fetch(PDO::FETCH_BOTH)){
				$user_number = $row['_id'];
			}
			if(isset($user_number)){
				session_start();
				$_SESSION['adminid']= $user_number;
				$this->renderView("/pg/admin/menu.php");
			}
			else{
				$this->renderAlertWithView("정보가 일치하지 않습니다.","/pg/admin/index.php");
			}
		}catch(Exception $e){
			echo $e;
		}
	}
}

?>
