<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">

<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
	}

	form
	{
		border:3px solid #f1f1f1;
	}

	input[type=text],input[type=password]
	{
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}

	button
	{
		background-color: #008AD5;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 100%;
	}

	button:hover
	{
		opacity: 0.8;
	}

	.newuser
	{
		width: auto;
		padding: 10px 18px;
		background-color: #f44336;
	}

	.imgcontainer
	{
		text-align: center;
		margin: 24px 0 12px 0;
	}

	img.avatar
	{
		width: 20%;
		border-radius: 50%;
	}

	.container
	{
		padding: 16px;
	}

	span.psw
	{
		float: right;
		padding-top: 16px;	
	}





</style>	
</head>
<body>
	

<h2>Login Form</h2>	
<form action="check_acc.php" method="post">

<div class="imgcontainer">
<img src="img_avatar2.png" alt="Avatar" class="avatar">
</div>

<div class="container">

	<label>Username</label>
<input type="text" name="uname" required><br>
<label>Password</label>
<input type="password" name="psw" required>
<br>
<button type="submit">Login</button>
</div>

<div class="container" style="background-color: #f1f1f1">
	New User ? <a href="signup.php"><button type="button" class="newuser">Create Account</button></a>
	<span class="psw">Forgot <a href="#">password?</a></span>
</div>


</form>


</body>
</html>