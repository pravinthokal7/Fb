<?php
function redirect($url)
{
	header("location: ".$url);
}

session_start();
session_destroy();

redirect("login.php");

?>