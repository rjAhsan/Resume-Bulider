<?php

if(empty(($_SESSION["email"]) && ($_SESSION["password"])) )
{
	 header('Location: http://localhost/ResumeBulider/Pages/login.php');
}

else{
	$user_id = $_SESSION["user_id"];
	$email = $_SESSION["email"];
	$_SESSION["password"];

}


?>