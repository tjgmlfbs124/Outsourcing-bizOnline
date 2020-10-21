<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  // 세션확인
	if(!isset($_SESSION)) session_start();

  // 로그인 상태 체크
  require $_SERVER['DOCUMENT_ROOT'].'/form/loginCheck.php';

  $url = getenv("QUERY_STRING"); // url중 쿼리문만 가져옴

  $device_id = $_GET['id'];
  $carrier = $_GET['carrier'];
  $installment_period = $_GET['installment_period'];
  $discount = $_GET['discount'];
  $size = $_GET['size'];
  $plan = $_GET['plan'];
  $color = $_GET['color'];

  $model = new getForm();
  $model -> insert_cart_item($_SESSION['id'], $url, $device_id, $carrier, $installment_period, $discount, $size, $plan, $color);
?>
