<html>
<head>
  <meta charset="UTF-8">
</head>
<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/form/getForm.php';
  $sql = "";
  $query = $_POST['query'];
  $querys = explode(",",$query);

  $fund = $_POST['fund'];
  $funds = explode(",",$fund);
  print 'fund:' .$funds[30].', ';

  $support = $_GET['support'];
  $newNumber = $_GET['newMember'];
  $numberMove = $_GET['MNP'];
  $deviceChange = $_GET['Device'];

  $Cnt = 0;
  if(!empty($fund)){
    //$sql += '여러SQL문 받아서, 쉼표로 구분한다';
    for($i =0; $i<count($funds); $i++) {
        $sql .= "UPDATE support_fund";

        print '1:' .$Cnt.', ';
        $sql .= " SET $support= $funds[$Cnt],";
        $Cnt++;

        print '2:' .$Cnt.', ';
        $sql .= "$newNumber=$funds[$Cnt],";
        $Cnt++;

        print '3:' .$Cnt.', ';
        $sql .= "$numberMove= $funds[$Cnt],";
        $Cnt++;

        print '4:' .$Cnt.', <br>';
        $sql .= "$deviceChange= $funds[$Cnt] ";
        $Cnt++;

        $sql .= "$querys[$i];";
      }
  }


  $model = new getForm();
  $model -> update_funds($sql);
?>

<script>console.log(<?php $sql ?>);</script>
</html>
