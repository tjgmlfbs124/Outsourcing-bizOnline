<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $id = $_GET['id'];
  $adminid = $_POST['adminid'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $date = $_POST['date'];

  if(strpos($content, "\n") != false) {
    $content = str_replace("\r\n","<br>",$content);
  }
  
  $model = new getForm();
  $model -> update_notice($id, $title, $content, $date, $adminid);

?>

</html>
