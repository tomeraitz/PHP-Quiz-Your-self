<?php
    require_once('includes/init.php');
	require_once('googleLogin/index.php');
	

	$error1 = "";
	$error2 = "";
	
	if(isset($_GET['err'])){
		
		if($_GET['err'] == 1) {
			$error1 = "There is ID like this in the system";
			$error2 = "";
		}
	
		if($_GET['err'] == 2) {
			$error2 = "Your Password is weak";
			$error1 = "";
			
			
		}
	}

		
	
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
		<link rel="stylesheet" href="css/register.css">
	<!----Script---->
	<script>
		function openLogin(){
			window.location = "Login.php";
		}
	</script>
</head>
<body>
	<div id="register">
			<form class="modal-content animate" action="dbTransfer/registerInsert.php" method="post">
				<div class="container-fluid">
					<h1>Register and start to play</h1>
					<label for="firstName"><b>First Name</b></label>
					<input type="text" value="<?php if(isset($_GET['err'])){echo $_SESSION['firstName'];} ?>" id="firstname" class="form-control" placeholder="Enter First Name" name="firstName"  required><br>

					<label for="lasttName"><b>Last Name</b></label>
					<input type="text" value="<?php if(isset($_GET['err'])){echo $_SESSION['lasttName'];} ?>" id="lasttname" class="form-control" placeholder="Enter Last Name" name="lasttName" required><br>
				
					<label for="userName"><b>Username</b></label>
					<input type="text" value="<?php if(isset($_GET['err'])){echo $_SESSION['userName'];} ?>" class="form-control" placeholder="Enter Username" name="userName" required><br>

					<label for="Password"><b>Password</b></label>
					<input type="password" value="<?php if(isset($_GET['err'])){echo $_SESSION['Password'];} ?>" class="form-control" placeholder="Enter Password" name="Password" required><br>
					<?php echo '<p style="color:red;"><b>'.$error2.'</b></p>'; ?>
				
					<label for="ID"><b>ID Number</b></label>
					<input type="number" value="<?php if(isset($_GET['err'])){echo $_SESSION['ID'];} ?>" class="form-control" placeholder="Enter ID" name="ID" required><br>
					<?php echo '<p style="color:red;"><b>'.$error1.'</b></p>'; ?>
				
					<label for="Email"><b>Email</b></label>
					<input type="Email" value="<?php if(isset($_GET['err'])){echo $_SESSION['Email'];} ?>" class="form-control" placeholder="Enter Email" name="Email" required><br>
				
					<label for="Age"><b>Age</b></label>
					<input type="number" value="<?php if(isset($_GET['err'])){echo $_SESSION['Age'];} ?>" class="form-control" placeholder="Enter Age" name="Age"><br>
				
					<label for="State"><b>State</b></label>
					<input type="text" value="<?php if(isset($_GET['err'])){echo $_SESSION['State'];} ?>" class="form-control" placeholder="Enter State" name="State"><br>
				
					<label for="Address"><b>Address</b></label>
					<input type="text" value="<?php if(isset($_GET['err'])){echo $_SESSION['Address'];} ?>" class="form-control" placeholder="Enter Address" name="Address"><br>
        
					<input type="submit" value="Rgister" name="submit" class="btn btn-primary btn-lg">
					<a class='login' href="<?php echo $authUrl ?>"><img src='googleLogin/gplus-lib/signin_button.png' alt='g+' width='100' height='50px'></a>
					
					<hr>
					<P><b>Already signed in?</b></p>
					<button  onclick="openLogin()" class="btn btn-success btn-lg btn-block">Sign In</button><br>
				</div>
			</form>
		</div>
</body>
</html>

