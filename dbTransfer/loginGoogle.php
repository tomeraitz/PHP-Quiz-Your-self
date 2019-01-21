<?php

	require_once('../includes/init.php');
    global $session;
	$user=new User();

	$id=$_SESSION['user_id'];
	echo $_SESSION['user_id'];
	 $first_name=$_SESSION['name'];

	if($user->find_user_by_id($id)){
		  $session->login($found_user);
		  header('Location: ../question/q1.php');
		  exit;
	}
	else{
			
			$user->construct($id,$first_name,$last_name,$user_name,$password_name,$email,$age,$state,$address);
			$user->add_user($id,$first_name,$last_name,$user_name,$password_name,$email,$age,$state,$address);
			$session->FirstLogin($id);
			header('Location: ../question/q1.php');
			exit;
	}
			
?>