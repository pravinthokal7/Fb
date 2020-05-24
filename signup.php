<!DOCTYPE html>
<html>
<head>
	<style>
		body
		{
			font-family: Arial, Helvetica, sans-serif;
		}

		input[type=text],input[type=password]
		{
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			background: #f1f1f1;
		}

		input[type=text]:focus,input[type=password]:focus
		{
			background-color: #ddd;
			outline: none; 
		}

		hr
		{
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
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
			opacity: 0.9;

		}

		button:hover
		{
			opacity: 1;
		}

	</style>

</head>
<body>

<form action="creating_acc.php" method="post" style="border:1px solid #ccc">

	<div class="container">
		<h1>Sign Up</h1>

		<p>Please fill in the form to create an account</p>
		<hr>

	<label for="email">Email</label>
	<input type="text" name="email" required><br>

	<label>Password</label>
	<input type="password" name="psw" required><br>

	<label>Confirm Password</label>
	<input type="password" name="psw_c" required><br>

	<label>
		<input type="checkbox" checked="checked" name="rememeber" style="margin-bottom: 15px"> Remember me
	</label>

	<p>By creating this account you aggre to our Terms and Privacy</p>


	<button type="submit">Sign Up</button>
	</div>
</form>

</body>
</html>