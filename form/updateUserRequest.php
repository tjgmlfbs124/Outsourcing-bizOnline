<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $id = $_GET['id'];

  $model = new getForm();
  $model -> update_user_request($id);
?>
