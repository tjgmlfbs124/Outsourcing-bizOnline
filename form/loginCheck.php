<?php
   if(!isset($_SESSION)) session_start();
   $id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
   if(!$id)
    echo 'alert("회원정보가 없습니다. 다시 로그인해주세요."); location.replace("/");';
?>
