<?php

	require_once('../includes/init.php');
    global $session;

	

?>

<!DOCTYPE html>
<html>
<head>
	<!----Title---->
		<title>QuizYourSelfe</title>
	<!----Meta---->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!----Style---->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/question.css">
	<!----Script---->
	<script>
		function openLogin1(){
			window.location = "../dbTransfer/count.php?count=5";
		}
		
		function openLogin2(){
			window.location = "../dbTransfer/count.php?count=6";
		}
		
		function openLogin3(){
			window.location = "../dbTransfer/count.php?count=2";
		}
		
		function openLogin4(){
			window.location = "../dbTransfer/count.php?count=1";
		}
	</script>
</head>
<body>
	<div id="q1">
			<form class="modal-content animate" action="" method="post">
				<div  style="background-image:teacher.jpg;" class="container-fluid">
					<label for="firstName"><h1>What is the best definition for a workplace<</h1></label>
						<br><img src="tecfrigo6.jpg" alt="bambas" width="500" height="330"></br>
						<center>
							<br><input type="button" onclick="openLogin1()" style="white-space: normal" value="Pleasant" id="a1" class="form-control" placeholder="agree" name="a1">
							<input type="button" onclick="openLogin2()"  style="white-space: normal"	value="Neutral" id="a2" class="form-control" placeholder="agree" name="a2"><br>
							<br><input type="button" onclick="openLogin3()" style="white-space: normal" value="Not so pleasant" id="a3" class="form-control" placeholder="agree" name="a3">
							<input type="button" onclick="openLogin4()" style="white-space: normal" value="Not pleasant at all" id="a4" class="form-control" placeholder="agree" name="a4"><br>
						</center>
				</div>
			</form>
		</div>
</body>
</html>
