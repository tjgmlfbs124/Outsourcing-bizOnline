<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  session_start();
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $cartid = $_GET['id'];
  $userid = $_SESSION['id'];

  $model = new getForm();
  $model -> delete_cart_item($userid, $cartid);
?>

</html>
