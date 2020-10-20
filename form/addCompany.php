<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $userid = $_POST['id'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $company = $_POST['company'];
  $phone = $_POST['phone'];
  $grade = $_POST['grade'];
  $code = $_POST['code'];



  $model = new getForm();
  $model -> insert_company($userid, $password, $grade, $name, $company, $phone, $code);
?>
</html>
