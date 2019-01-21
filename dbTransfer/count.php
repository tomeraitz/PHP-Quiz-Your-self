<?php

	require_once('../includes/init.php');
    global $session;
	
	
		if(isset($_GET['count'])){
		
		if($_GET['count'] == 1) {
			$session->add_to_answer(1);
		}
	
		if($_GET['count'] == 2) {
			$session->add_to_answer(2);
		}
		
		if($_GET['count'] == 3) {
			$session->add_to_answer(3);
		}
		
		if($_GET['count'] == 4) {
			$session->add_to_answer(4);
		}
		
		if($_GET['count'] == 5) {
			$session->add_to_answer(5);
		}
		
		if($_GET['count'] == 6) {
			$session->add_to_answer(6);
		}
		
		if($_GET['count'] == 7) {
			$session->add_to_answer(7);
		}
	}
	
	$session->add_to_q();
	if($session->get_qnumber() < 11){
		header('Location: ../question/q'.$session->get_qnumber().'.php');
		exit;
	}
	else
		$user=new User();
		$id = $session->get_user_id();
		$user->add_answer($session->get_answer(),$id['id']);
		header('Location: ../answer/answer.php');
		exit;

?>