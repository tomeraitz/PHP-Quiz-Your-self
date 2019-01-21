<?php
    require_once('includes/init.php');
	require_once('googleLogin/index.php');
    global $session;
    $error='';
    if(isset($_POST['submit'])){
        if (!$_POST['user']){
            $error='User is required';
        }
        else if(!$_POST['password']){
            $error='Password is required';
        }
        else{
            
            $user=$_POST['user'];
            $password=$_POST['password'];
            $password_obj=new Password();
			$password = $password_obj->decrypePass($password);
			echo $password;
            $found_user=$password_obj->find_user($user,$password);
            if ($found_user!=null){
                $session->login($found_user);
                header('Location: question/q1.php');

            }
            else{
                $error='Use name or password are incorrect';
            }
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
		<link rel="stylesheet" href="css/login.css">
	<!----Script---->
	<script>
		function openLogin(){
			window.location = "register.php";
		}
	</script>
</head>
<body>
	<p id="error"><?php echo $error?></p>
	<div id="login">
			<form class="modal-content animate" method="post">
					<h1>Sign in and start to play</h1>
					<br><label for="userName"><b>Username</b></label>
					<input type="text" class="form-control" placeholder="Enter Username" name="user" required><br><br>

					<label for="Password"><b>Password</b></label>
					<input type="password" class="form-control" placeholder="Enter Password" name="password" required><br><br>
        
					<input type="submit" value="sign in" name="submit" class="btn btn-primary btn-lg">
					<a class='login' href="<?php echo $authUrl ?>"><img src='googleLogin/gplus-lib/signin_button.png' alt='g+' width='100' height='50px'></a>
					
					<hr>
					<P><b>Don't have account?</b></p>
					<button  onclick="openLogin()" class="btn btn-success btn-lg btn-block">Register</button><br>
				</div>
			</form>
	</div>
</body>
</html>


