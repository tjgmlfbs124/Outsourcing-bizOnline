<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $model = new getForm();

  $id = $_POST['id'];
  $password = $_POST['password'];
  $grade = $_POST['grade'];
  $model -> select_user($id, $password, $grade);
?>

</html>
