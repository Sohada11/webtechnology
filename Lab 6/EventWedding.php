<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Event Select</title>
</head>
<body>

	<?php
	$name =""; 
	session_start();
	if(isset( $_SESSION['uname'])){
		$name = $_SESSION['uname'];
	}
	if(empty($name)){
		header("location:LoginPage.php");
	}
	?>

	<div>
		<?php include 'header.php'?>
	</div>
	<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lavenderblush;

}
</style>
</head>
<body>

	<br>

	<div style="border: 1px solid blue; color: blue; font-size: 20px;">
		<fieldset>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
				<div>
					<table>
						<tr>
							<td style="width:300px;">
								<br>
								<ul>
									<li><a href="DashBoard.php">Dashboard</a></li>
									<li><a href="Blog.php">Blog</a></li>
									<li><a href="EventSelect.php">Select Event</a></li>
                                    <li><a href="ProfilePage.php">View Profile</a></li>
                                    <li><a href="EditProfile.php">Edit Profile</a></li>
                                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                                    <li><a href="ChangePassword.php">Change Password</a></li>
                                    <li><a href="LogOut.php">Logout</a></li>
								</ul>
							</td>

							<td>
								<fieldset style="width:300px; height:300px;">
									<legend><h2>Events</h2></legend>
									<table>
										<tr>
											<ul>
												<li><a href="EventWedding.php">Wedding</a></li>
												<li><a href="engagement.php">Engagement Ceremony</a></li>
												<li><a href="birthday.php">Birthday</a></li>
											</ul>
										</tr>										
									</table> <br>
								</fieldset>
							</td>

							<td>
								<fieldset style="width: 800px; height: 300px;">
									<legend><h2>Wedding</h2></legend>
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
										<table>
											<tr>
												<td>
													<ul>
														<li><a href="weddingbudget.php">Set Budget</a></li>
														<li><a href="weddingvendor.php">Vendors</a></li>
													</ul>
												</td>
											</tr>
											<tr>
												<td></td>
											</tr>
										</table>
									</form>
								</fieldset>
							</td>
						</tr>
					</table>
				</div>
			</form>
		</fieldset>
	</div>

	<br>

	<div align="center">
		<?php include 'footer.php'?>
	</div>
</body>
</html>