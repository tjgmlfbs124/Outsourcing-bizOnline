<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $adminid = $_POST['adminid'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $date = $_POST['date'];

  if(strpos($content, "\n") != false) {
    $content = str_replace("\r\n","<br>",$content);
  }

  $model = new getForm();
  $model -> insert_notice($title, $content, $date, $adminid);
?>
</html>
