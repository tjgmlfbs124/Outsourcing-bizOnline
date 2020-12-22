<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  if(!isset($_SESSION)) session_start();
  $id = $_SESSION['id'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $company = $_POST['company'];
  $phone = $_POST['phone'];
  $grade = $_POST['grade'];
  $url = $_POST['url'];

  $model = new getForm();
  $model -> update_company($id, $password, $grade, $name, $company, $phone,  $url);
?>

</html>
