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
				SELECT D.*, GROUP_CONCAT(DISTINCT S._id,\":\",S.storage,\":\",S.price) as price, GROUP_CONCAT(DISTINCT C._id,\":\",C.name,\":\",C.image_url,\":\",C.color, \":\", C.carrier_id) as color
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
			SELECT DISTINCT P.*, SF.* FROM
			support_fund SF INNER JOIN
			mobile_plan P on P._id = SF.mobile_plan_id LEFT JOIN
			device_mobile_category M on P.category_id = M.category_id
			WHERE M.device_id = ".$id."
			AND SF.device_id = ".$id."
			AND M.category_id =
			   ANY(SELECT _id
			   FROM mobile_plan_category
			   WHERE mobile_carrier_id = ".$carrier.");";
				 // echo $sql;
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
			if((strpos($e, "userid_UNIQUE")) !== false){
				$this->renderAlertWithView("이미 아이디가 존재합니다.","/pg/signup.php");
			}
			if(strpos($e, "constraint") !== false){
				$this->renderAlertWithView("존재하는 추천인코드가 없습니다","/pg/signup.php");
			}
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

	function select_users($request){
		try{
			$pdo = $GLOBALS["pdo"];
			if($request == 0) // 전체
				$sql = "SELECT * FROM user";
			else if($request == 1) // 승인된 사람
				$sql = "SELECT * FROM user WHERE approval_date IS NOT NULL";
			else 	// 아직 승인되지 않은사람.
				$sql = "SELECT * FROM user WHERE approval_date IS NULL";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	function delete_user($id){
			try{
				$pdo = $GLOBALS["pdo"];
				$sql = "DELETE FROM user WHERE _id=$id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				$this->renderAlertWithView("삭제되었습니다.", "/pg/admin/menu.php?dir=user&sub=userList&request=0");
			}catch(Exception $e){
				echo $e;
			}
	}

	function update_user_request($id){
			try{
				$pdo = $GLOBALS["pdo"];
				$sql = "UPDATE user SET `approval_date`=NOW() WHERE _id=$id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				$this->renderAlertWithView("승인되었습니다.", "/pg/admin/menu.php?dir=user&sub=userList&request=0");
			}catch(Exception $e){
				echo $e;
			}
	}

	// 견적 저장
	function insert_cart_item($id, $url, $device_id, $carrier, $installment_period, $discount, $size, $plan, $color){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "INSERT INTO user_estimate(url, user_id, device_id, carrier_id, installment_period, discount, size_id, plan_id, color_id)
			VALUES(\"$url\",\"$id\",\"$device_id\",\"$carrier\",\"$installment_period\",\"$discount\",\"$size\",\"$plan\",\"$color\");";
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
					$sql = "SELECT * FROM user_estimate WHERE user_id=".$id." ORDER BY date DESC";
			}
			else{
				$sql = "SELECT * FROM user_estimate WHERE user_id=".$id." AND carrier_id=".$carrier." ORDER BY date DESC";
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
						   AND Pl._id=".$plan;
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
				$this->renderView("/pg/admin/menu.php?dir=plan&sub=planList");
			}
			else{
				$this->renderAlertWithView("정보가 일치하지 않습니다.","/pg/admin/index.php");
			}
		}catch(Exception $e){
			echo $e;
		}
	}

	function select_admin_id($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT userid FROM manager WHERE _id=$id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_BOTH);
		}catch(Exception $e){
			echo $e;
		}
	}


	/**
	* 카테고리 아이디 조회
	* 이 카테고리 아이디는 요금제, 공시지원금, 추가지원금 조회에 쓰인다.
	* 	@carrier : 통신사 id
	* 	@plan : 요금제 이름
	*/
	function select_category_id($carrier, $plan){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT _id
				FROM mobile_plan_category
				WHERE `mobile_carrier_id` = ".$carrier."
				AND `name`=\"".$plan."\"";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	function select_device_category_id($device_id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "SELECT * from device_mobile_category where device_id = $device_id;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	// 저장한 견적들 조회
	function select_plan(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "
			SELECT P.*, PC.name as cat_name, C._id as carrier_id
			FROM mobile_carrier C, mobile_plan P, mobile_plan_category PC
			WHERE C._id = (
				SELECT mobile_carrier_id
				FROM mobile_plan_category
				WHERE _id = P.category_id)
			AND PC._id = P.category_id;";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			return $stmt;
		}catch(Exception $e){
			echo $e;
		}
	}

	function update_plan(){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = $updateSQL;
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("저장되었습니다.","/pg/admin/menu.php?sub=plan");
		}catch(Exception $e){
			echo $e;
		}
	}

	function delete_plan($id){
		try{
			$pdo = $GLOBALS["pdo"];
			$sql = "DELETE FROM mobile_plan WHERE _id=".$id;
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$this->renderAlertWithView("삭제되었습니다.","/pg/admin/menu.php?sub=plan");
		}catch(Exception $e){
			echo $e;
		}
	}

	// 카테고리 아이디(통신사+요금)에 맞는 요금
	function select_item_name(){
			try{
				$pdo = $GLOBALS["pdo"];
				$sql = "SELECT _id, name FROM device";
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				return $stmt;
			}catch(Exception $e){
				echo $e;
			}
	}

	function select_funds(){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
	 			$sql = "
					### 모든 공시 지원금 출력
					SELECT F._id as id, F.device_id as device_id, D.name as device_name, F.mobile_plan_id as plan_id, P.name as plan_name, F.fund, F.additional_fund
					FROM support_fund F, Device D, mobile_plan P
					WHERE F.device_id=D._id
						AND F.mobile_plan_id=P._id
						ORDER BY device_id, mobile_plan_id;
					";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
	 			return $stmt;
	 		}catch(Exception $e){
	 			echo $e;
	 		}
	}

	function update_funds($support, $query){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
	 			$sql = "UPDATE `support_fund`
					SET `".$support."`=
						(CASE "
						.$query.
						" END)";
				// echo $sql;
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
				$this->renderAlertWithView("적용되었습니다.","/pg/admin/menu.php?sub=additional_fund");
	 		}catch(Exception $e){
	 			echo $e;
	 		}
	}

	function add_device($name, $model, $thumnailUrl, $display, $camera, $cpu, $size, $manufacturer, $release, $colorQuery, $sizeQuery, $devicePlanCategories){
 		try{
 			$pdo = $GLOBALS["pdo"];
 			$sql = "
				BEGIN;
					INSERT INTO device (`name`, `model`, `image_url`, `spec_display`, `spec_cam`, `spec_cpu`, `spec_size`,`manufacturer_id`, `release`)
					VALUES (
						\"$name\",
					  \"$model\",
					  \"temp.jpg\",
					  \"$display\",
					  \"$camera\",
					  \"$cpu\",
					  \"$size\",
					  $manufacturer,
					  \"$release\"
					);
					SET @mDevice_id = (SELECT _id FROM device ORDER BY _id DESC LIMIT 1);
					INSERT INTO device_storage(`device_id`,`storage`, `price`)
					VALUES
						$sizeQuery
					INSERT INTO device_image(`device_id`,`name`,`image_url`,`color`,`carrier_id`)VALUES
					$colorQuery
					INSERT INTO device_mobile_category(`device_id`, `category_id`)
					VALUES
					$devicePlanCategories
					INSERT INTO support_fund(`device_id`, `mobile_plan_id`, `fund`, `additional_fund`)
					SELECT D._id as D_id, P._id as P_id, 0 as mFund, 0 as addFund
					  FROM Device D, mobile_plan P
					  WHERE D._id = @mDevice_id;
				COMMIT;
			";
 			$stmt = $pdo->prepare($sql);
 			$stmt->execute();
			$this->renderAlertWithView("추가되었습니다.","/pg/admin/addDevice.php?sub=addDevice");
 		}catch(Exception $e){
 			echo $e;
		}
	}

	function select_manufactures(){
 		try{
 			$pdo = $GLOBALS["pdo"];
 			$sql = "SELECT * FROM manufacturer";
 			$stmt = $pdo->prepare($sql);
 			$stmt->execute();
 			return $stmt;
 		}catch(Exception $e){
 			echo $e;
 		}
	}

	function delete_device($id, $manufacturer){
 		try{
 			$pdo = $GLOBALS["pdo"];
 			$sql = "DELETE FROM device WHERE _id=$id";
 			$stmt = $pdo->prepare($sql);
 			$stmt->execute();
			$this->renderAlertWithView("삭제되었습니다.","/pg/admin/menu.php?dir=device&sub=deviceList&manufacturer=$manufacturer");
 		}catch(Exception $e){
 			echo $e;
 		}
	}

	function insert_company($userid, $password, $grade, $name, $company, $phone, $code){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
	 			$sql = "INSERT INTO manager (`userid`,`password`, `grade`, `name`,`company`, `phone`,`code`)
								VALUES(\"$userid\",\"$password\",\"$grade\",\"$name\",\"$company\",\"$phone\",\"$code\")";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
				$this->renderAlertWithView("추가되었습니다.","/pg/admin/menu.php?sub=addCompany");
	 		}catch(Exception $e){
				if(strpos($e, "code_UNIQUE") !== false){
					$this->renderAlertWithView("코드가 중복됩니다. 다시입력해주세요.","/pg/admin/menu.php?sub=addCompany");
				}
				else if(strpos($e, "userid_UNIQUE") !== false){
					$this->renderAlertWithView("아이디가 중복됩니다. 다시입력해주세요.","/pg/admin/menu.php?sub=addCompany");
				}
	 		}
	}

	function select_companys($grade){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				if($grade == 0 ){
		 			$sql = "SELECT * FROM manager";
				}else{
		 			$sql = "SELECT * FROM manager WHERE grade=$grade";
				}
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
	 			return $stmt;
	 		}catch(Exception $e){
				echo $e;
	 		}
	}

	function delete_company($id){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				$sql = "DELETE FROM manager WHERE _id=$id";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
				$this->renderAlertWithView("삭제되었습니다.","/pg/admin/menu.php?sub=companyList&grade=0");
	 		}catch(Exception $e){
				echo $e;
	 		}
	}

	function select_company($id){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				$sql = "SELECT * FROM manager WHERE _id=$id";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
	 			return $stmt;
	 		}catch(Exception $e){
				echo $e;
	 		}
	}

	function update_company($id, $userid, $password, $grade, $name, $company, $phone, $code){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				$sql = "UPDATE manager SET
					`userid`=\"$userid\",
					`password`=\"$password\",
					`grade`=\"$grade\",
					`name`=\"$name\",
					`company`=\"$company\",
					`phone`=\"$phone\",
					`code`=\"$code\"
				 	WHERE `_id`=$id";
				echo "<br>".$sql."<br>";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
				$this->renderAlertWithView("적용되었습니다.","/pg/admin/menu.php?sub=updateCompany&id=$id");
	 		}catch(Exception $e){
				echo $e;
				if(strpos($e, "code_UNIQUE") !== false){
					$this->renderAlertWithView("코드가 중복됩니다. 다시입력해주세요.","/pg/admin/menu.php?sub=updateCompany&id=$id");
				}
				else if(strpos($e, "userid_UNIQUE") !== false){
					$this->renderAlertWithView("아이디가 중복됩니다. 다시입력해주세요.","/pg/admin/menu.php?sub=updateCompany&id=$id");
				}
	 		}
	}

	function insert_notice($title, $content, $date, $adminid){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				$sql = "INSERT INTO notice (`title`,`content`, `date`, `writer`) VALUES (\"$title\", \"$content\", \"$date\", $adminid)";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
				$this->renderAlertWithView("추가되었습니다.","/pg/admin/menu.php?dir=notice&sub=noticelist");
	 		}catch(Exception $e){
				echo $e;
	 		}
	}

	function select_notices(){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				$sql = "SELECT N.*, M.name FROM notice AS N
								JOIN manager AS M
								ON N.writer = M._id";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
	 			return $stmt;
	 		}catch(Exception $e){
				echo $e;
	 		}
	}

	function delete_notice($id){
			try{
				$pdo = $GLOBALS["pdo"];
				$sql = "DELETE FROM notice WHERE _id=$id";
				$stmt = $pdo->prepare($sql);
				$stmt->execute();
				$this->renderAlertWithView("삭제되었습니다.", "/pg/admin/menu.php?dir=notice&sub=noticelist");
			}catch(Exception $e){
				echo $e;
			}
	}

	function select_notice($id){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				$sql = "SELECT N.*, M.name, M.userid FROM notice AS N
								JOIN manager AS M
								ON N.writer = M._id
								WHERE N._id = $id";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
	 			return $stmt;
	 		}catch(Exception $e){
				echo $e;
	 		}
	}

	function update_notice($id, $title, $content, $date, $adminid){
	 		try{
	 			$pdo = $GLOBALS["pdo"];
				$sql = "UPDATE notice SET `title`=\"$title\", `content`=\"$content\", `date`=\"$date\", `writer`=$adminid WHERE `_id`=$id";
	 			$stmt = $pdo->prepare($sql);
	 			$stmt->execute();
	 			$this->renderAlertWithView("변경되었습니다.", "/pg/admin/menu.php?dir=notice&sub=noticelist");
	 		}catch(Exception $e){
				echo $e;
	 		}
	}
}

?>
