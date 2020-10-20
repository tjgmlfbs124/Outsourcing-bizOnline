<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $query = $_POST['query'];
  $support = $_GET['support'];

  $model = new getForm();
  $model -> update_funds($support, $query);
?>

</html>
