<?php
function redirect($url)
{
	header("location: ".$url);
}


session_start();

$stat =  $_POST["status"];
$id = $_SESSION["id"];
$uname = $_SESSION["uname"];

include 'mysql_conn.php';

$sql = "INSERT INTO posts(userid,uname,status) VALUES ($id,'$uname','$stat');";

if(mysqli_query($conn,$sql))
{
	echo "New record created successfully";
	redirect("dashboard.php");
}
else
{
	echo "error".mysqli_error($conn);
}

mysqli_close($conn);

?>