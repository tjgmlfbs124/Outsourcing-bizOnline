<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $id = $_GET['id'];
  $manufacturer = $_GET['manufacture'];

  $model = new getForm();
  $model -> delete_company($id, $manufacturer);
?>

</html>
