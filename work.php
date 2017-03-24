<?php
 session_start();
 IF(ISSET($_POST['ADD'])){
	 $RES = $_POST['RESULT'];
	 $RES = $RES + $_POST['NUMBER'];
	 $_SESSION['RESULT'] = $RES;
	 $_SESSION['OP'] = 1;
 }
 IF(ISSET($_POST['SUBS'])){
	 $RES = $_POST['RESULT'];
	 $RES= $RES - $_POST['NUMBER'];
	 $_SESSION['RESULT'] = $RES;
	 $_SESSION['OP'] = 2;
 }
 
 IF(ISSET($_POST['MULT'])){
	 IF($_POST['RESULT'] == 0){
		 $RES = 1;
	 }
	 ELSE{
		 $RES = $_POST['RESULT'];
	 }
	 $RES = $RES * $_POST['NUMBER'];
	 $_SESSION['RESULT'] = $RES;
	 $_SESSION['OP'] = 3;
 }
 
 IF(ISSET($_POST['DEV'])){
	 IF($_POST['RESULT'] == 0){
		 $RES = 1;
	 }
	 ELSE{
		 $RES = $_POST['RESULT'];
	 }
	 $RES =$RES / $_POST['NUMBER'];
	 $_SESSION['RESULT'] = $RES;
	 $_SESSION['OP'] = 4;
 }
 
 IF(ISSET($_POST['DONE'])){
	 SWITCH ($_SESSION['OP']){
		 CASE 1:
			$RES = $_POST['RESULT'];
			$RES = $RES + $_POST['NUMBER'];
			$_SESSION['RESULT'] = $RES;
			BREAK;
		CASE 2:
			$RES = $_POST['RESULT'];
			$RES= $RES - $_POST['NUMBER'];
			$_SESSION['RESULT'] = $RES;
			BREAK;
		CASE 3: 
			IF($_POST['RESULT'] == 0){
			$RES = 1;
			}
			ELSE{
				$RES = $_POST['RESULT'];
			}
			$RES = $RES * $_POST['NUMBER'];
			$_SESSION['RESULT'] = $RES;
			BREAK;
		CASE 4:
			IF($_POST['RESULT'] == 0){
				$RES = 1;
			}
			ELSE{
				$RES = $_POST['RESULT'];
			}
			$RES =$_POST['NUMBER'] / $RES;
			$_SESSION['RESULT'] = $RES;
			BREAK;
	}
 }

 header('location:index.php');

?>