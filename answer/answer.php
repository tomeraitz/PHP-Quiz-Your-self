<?php

	require_once('../includes/init.php');
	
    global $session;
	if($session->get_answer() > 10 && $session->get_answer() < 17){
		require_once('../options/option1.html');
	}
	
	if($session->get_answer() > 18 && $session->get_answer() < 25){
		require_once('../options/option2.html');
	}
	
	if($session->get_answer() > 26 && $session->get_answer() < 30){
		require_once('../options/option3.html');
	}
	
	if($session->get_answer() > 30){
		require_once('../options/option4.html');
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
		<link rel="stylesheet" href="../css/question.css">
</head>
<body>

</body>
</html>



