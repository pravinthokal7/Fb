<?php

function redirect($url)
{
	header("location: ".$url);
}

session_start();

$user =  $_POST["uname"];
$pass =  $_POST["psw"];

include 'mysql_conn.php';

$sql = "select * from user;";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if($user==$row["username"])
		{
			if(md5($pass)==$row["password"])
			{
				echo "user verified";
				$_SESSION["uname"] = $user;
				$_SESSION["id"] = $row["id"];
				redirect('dashboard.php');	
			}
			else
			{
				echo "wrong password";
			}	
		}
	}
}
else
{
	echo "0 results";
}

mysqli_close($conn);

?>