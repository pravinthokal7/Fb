<?php
function redirect($url)
{
	header("location: ".$url);
}

redirect('login.php');
?>