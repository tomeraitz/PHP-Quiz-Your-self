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
			window.location = "../dbTransfer/count.php?count=4";
		}
		
		function openLogin2(){
			window.location = "../dbTransfer/count.php?count=1";
		}
		
		function openLogin3(){
			window.location = "../dbTransfer/count.php?count=2";
		}
		
		function openLogin4(){
			window.location = "../dbTransfer/count.php?count=6";
		}
		function openLogin5(){
			window.location = "../dbTransfer/count.php?count=5";
		}
		function openLogin6(){
			window.location = "../dbTransfer/count.php?count=4";
		}
	</script>
</head>
<body>
	<div id="q1">
			<form class="modal-content animate" action="" method="post">
				<div  style="background-image:teacher.jpg;" class="container-fluid">
					<label for="firstName"><h1>Select only one of the following concepts:</h1></label>
						<br><img src="tecfrigo6.jpg" alt="bambas" width="500" height="330"></br>
						<center>
							<br><input type="button" onclick="openLogin1()" style="white-space: normal" value="Bone" id="a1" class="form-control" placeholder="agree" name="a1">
							<input type="button" onclick="openLogin2()" style="white-space: normal"   value="Sea" id="a2" class="form-control" placeholder="agree" name="a2"><br>
							<br><input type="button" onclick="openLogin3()" style="white-space: normal" value="Metal" id="a3" class="form-control" placeholder="agree" name="a3">
							<input type="button" onclick="openLogin4()" style="white-space: normal"  value="Cable" id="a4" class="form-control" placeholder="agree" name="a4"><br>
							<input type="button" onclick="openLogin5()" style="white-space: normal"  value="Ruler" id="a5" class="form-control" placeholder="agree" name="a5"><br>
							<input type="button" onclick="openLogin6()" style="white-space: normal"  value="Fabric" id="a6" class="form-control" placeholder="agree" name="a6"><br>
						</center>
				</div>
			</form>
		</div>
</body>
</html>

<body>
	<div id="register">
			<form class="modal-content animate" action="pages/registerInsert.php" method="post">
				<div class="container-fluid">
				<br><img src="tecfrigo6.jpg" alt="bambas" width="500" height="330"></br>
					<label for="firstName"><h1>Select only one of the following concepts:</h1></label>
					<br><input type="button" value="Bone" id="a1" class="form-control" placeholder="agree" name="a1"><br>
					<br><input type="button" value="Sea" id="a2" class="form-control" placeholder="agree" name="a2"><br>
					<br><input type="button" value="Metal" id="a3" class="form-control" placeholder="agree" name="a3"><br>
					<br><input type="button" value="Cable" id="a4" class="form-control" placeholder="agree" name="a4"><br>
					<br><input type="button" value="Ruler" id="a5" class="form-control" placeholder="agree" name="a5"><br>
					<br><input type="button" value="Fabric" id="a6" class="form-control" placeholder="agree" name="a6"><br>
					
					<hr>
					
				</div>
			</form>
		</div>
</body>
</html>