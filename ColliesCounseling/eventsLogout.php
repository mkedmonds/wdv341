<?php
session_start();	//provide access to the current session

$_SESSION['signedIn']='notConfirm';
session_unset();	//remove all session variables related to current session
session_destroy();	//remove current session

header('Location: eventsLogin.php');


?>