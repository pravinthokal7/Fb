<?php

function redirect($url)
{
	header("location: ".$url);
}

$email =  $_POST["email"];
$pass =  $_POST["psw"];

include 'mysql_conn.php';

$sql = "insert into user (username,password) values ('$email',MD5('$pass'));";

if($conn->query($sql)===TRUE)
{
	echo "new user created";
	redirect('login.php');
}
else
{
	echo "error";
}

$conn->close();


?>