<?php

    require_once('includes/init.php');
    global $session;

    $session->logout();
    header('Location: login.php');

?>
    
     
           
