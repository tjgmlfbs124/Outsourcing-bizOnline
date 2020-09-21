<?php
	if(!isset($_SESSION)) session_start();
	$result = session_destroy();

	if($result) {
		echo '<script>
					alert("로그아웃되었습니다");
					location.replace("/");
					</script>';
	}
?>
