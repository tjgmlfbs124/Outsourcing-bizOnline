<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  $filename = null;

  // length만큼 무작위 문자열을 반환하는 함수
  function generateRandomString($length){
    return substr(str_shuffle(str_repeat($x='0123456789abcdef',ceil($length/strlen($x)))),1,$length);
  }

  if(strcmp($_FILES['fileToUpload']["tmp_name"],"")){
      $filename = generateRandomString(32);
      $target_file =  $_SERVER['DOCUMENT_ROOT']."image/profile/".$filename.".jpg";
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }

  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';

  $id = $_POST['id'];
  $password = $_POST['password'];
  $name = $_POST['aaa'];
  $phone = $_POST['phone'];
  $recommender = $_POST['recommender'];
  if(!isset($filename)) $image = null;  // 이미지가 없다면
  else $image = $filename;              // 이미지가 있다면
  $date = date("Y-m-d h:i:s", time());

  $model = new getForm();
  $model -> insert_user($id, $password, $phone, $name, $image, $date, $recommender);
?>

</html>
