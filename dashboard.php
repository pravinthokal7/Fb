<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>FB</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	html,body,h1,h2,h3,h4,h5 
	{
		font-family: "Open Sans",sans-serif;
	}
</style>
<body class="w3-theme-l5">

	<div class="w3-top">
		<div class="w3-bar w3-theme-d2 w3-left-align w3-large">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>

			<div class="w3-dropdown-hover w3-hide-small">
				<button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>

				<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
					<a href="#" class="w3-bar-item w3-button">One new friend request</a>
					<a href="#" class="w3-bar-item w3-button">Root posted on your wall</a>
					<a href="#" class="w3-bar-item w3-button">Test likes your post</a>
				</div>
			</div>

			<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Log Out">
				<img src="images/logout.png" class="w3-circle" style="height: 23px;width: 23px" alt="Avatar">
			</a>
			<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
				<img src="images/avatar2.png" class="w3-circle" style="height: 23px;width: 23px" alt="Avatar">
			</a>
		</div>
	</div>

	<!-- Page Container -->

	<div class="w3-container w3-content" style="max-width: 1400px; margin-top: 80px">
		<div class="w3-row">
			<div class="w3-col m3">

				<div class="w3-card w3-round w3-white">
					<div class="w3-container">
						<h4 class="w3-center">My Profile</h4>
						<p class="w3-center"><img src="images/avatar3.png" class="w3-circle" style="height: 106x;width: 106px" alt="Avatar"></p>
						<hr>
						<p> <i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $_SESSION['uname']; ?></p>
						<p> <i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Mumbai, India </p>
						<p> <i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Jun 1,1998 </p>
						
					</div>
				</div>
			<br>

	<!-- middle left -->

	<div class="w3-card w3-round">
		<div class="w3-white">
			<button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right">  My Groups</i></button>

			<button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right">  My Events</i></button>

			<button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right">  My Photos</i></button>
		</div>
	</div>
		<br>
	<!-- Interests -->

	<div class="w3-card w3-round w3-white w3-hide-small">
	<div class="w3-container">

	<p>Interests</p>
	<p>
		<span class="w3-tag w3-small w3-theme-d5">News</span>
		<span class="w3-tag w3-small w3-theme-d3">Labels</span>
		<span class="w3-tag w3-small w3-theme-d2">Games</span>
		<span class="w3-tag w3-small w3-theme-l1">Friends</span>
		<span class="w3-tag w3-small w3-theme-l2">Food</span>
		<span class="w3-tag w3-small w3-theme-l3">Design</span>
		<span class="w3-tag w3-small w3-theme-l4">Art</span>
		<span class="w3-tag w3-small w3-theme-l5">Photos</span>
	</p>
</div>
</div>


<!-- End Left Column -->

</div>

<!-- Middle Column -->

<div class="w3-col m7">

	<br>
	<form action="postit.php" method="post">
		<div class="w3-row-padding">
			<div class="w3-col m12">
				<div class="w3-card w3-round w3-white">
				<div class="w3-container w3-padding">
					<h6 class="w3-opacity">Create Post</h6>
					<p>

		<input type="text" placeholder="Status: Feeling Blue" class="w3-border w3-padding" name="status" required style="width: 100%;"></p>

		<button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Post</button>
	</div>
</div>
</div>
</div>
	</form>


	<?php
		include 'mysql_conn.php';

		$sql = "select * from posts order by postid desc";

		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result) > 0)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{

				?>
					<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
						<img src="images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width: 60px">
						<span class="w3-right w3-opacity"><?php echo $row["time"]; ?></span>
						<h4><?php echo $row['uname'] ?></h4><br>
						<hr class="w3-clear">
						<p><?php echo $row["status"]; ?></p>
						<p>
							<i class="fa fa-thumbs-up"></i>
							<?php echo $row["likes"] ?>
						</p>
						<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">
							<i class="fa fa-thumbs-up"></i> Like
						</button>

						<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom">
							<i class="fa fa-comment"></i> Comment
						</button>

						</div>

				<?php
			}
		}
	?>

</div>

<!-- Right Column -->

<div class="w3-col m2">
<div class="w3-card w3-round w3-white w3-center">
	<div class="w3-container">
	<p>Upcoming Events:</p>
	<img src="images/forest.jpg" alt="Forest" style="width: 100%;">
	<p> <strong>Holiday</strong></p>
	<p>Friday 15:00</p>
	<p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
</div>
	</div>
<br>

<div class="w3-card w3-round w3-white w3-center">
	<div class="w3-container">
		<p>Friend Request</p>
		<img src="images/avatar6.png" alt="Avatar" style="width: 50%"><br>

		<span>Suzie Watson</span>	
		<div class="w3-row w3-opacity">
			<div class="w3-half">
				<button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
			</div>

			<div class="w3-half">
				<button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
			</div>
			
		</div>

</div>
</body>
</html>

