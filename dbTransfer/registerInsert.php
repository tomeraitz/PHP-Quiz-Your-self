<?php

	require_once('../includes/init.php');
    
	
	$user=new User();
	
	$id=$_POST["ID"];
	$first_name=$_POST["firstName"];
	$last_name=$_POST["lasttName"];
	$user_name=$_POST["userName"];
	$password_name=$_POST["Password"];
	$email=$_POST["Email"];
	$age=$_POST["Age"];
	$state=$_POST["State"];
	$address=$_POST["Address"];
	
    if($user->find_user_by_id($id)){
			header('Location: ../register.php?err=1');
			exit;
		}
	
	else if($user->find_user_by_Password($password_name)){
			header('Location: ../register.php?err=2');
			exit;
		}
	else{
			$password_name = $user->crypePass($password_name);
			$user->construct($id,$first_name,$last_name,$user_name,$password_name,$email,$age,$state,$address);
			$user->add_user($id,$first_name,$last_name,$user_name,$password_name,$email,$age,$state,$address);
			$session->FirstLogin($user);
			header('Location: ../question/q1.php');
			exit;
		}
		
?>




