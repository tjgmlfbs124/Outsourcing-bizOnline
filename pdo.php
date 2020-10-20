<?php
$mysql_host = '183.111.226.60:3306';
$mysql_user = 'tathink_biz_online';
$mysql_password = 'emsys$$$';
$mysql_db = 'biz_online';
try {
	$pdo = new PDO("mysql:host=$mysql_host;dbname=$mysql_db", $mysql_user, $mysql_password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec("set names utf8;");
} catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}
?>
