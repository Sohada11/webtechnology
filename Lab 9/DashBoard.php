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
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>DashBoard</title>

</head>
<body >
    <div class="full-page">
            <div class="full-page">
            <?php include 'header.php'; ?>
    </div>

    <div style="border: 1px solid blue; width: 100%; margin-top: 140px; color: blue; font-size: 20px; float: left">
        <fieldset>
            <form>
                <div>
                    <table>
                        <tr>
                            <td style="width: 300px;">
                                <br>
                                <ul>
                                    <li><a href="DashBoard.php">Dashboard</a></li>
                                    <li><a href="Blog.php">Blog</a></li>
                                    <li><a href="marketPlace.php">Market Place</a></li>
                                    <li><a href="EventSelect.php">Select Event</a></li>
                                    <li><a href="ProfilePage.php">View Profile</a></li>
                                    <li><a href="EditProfile.php">Edit Profile</a></li>
                                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                                    <li><a href="ChangePassword.php">Change Password</a></li>
                                    <li><a href="LogOut.php">Logout</a></li>
                                </ul>
                            </td>
                            <td style="width: 1000px; font-size: 30px; text-align: center; vertical-align: text-top;">Welcome to Wed Site <b><?php echo $_SESSION['uname'];?></b></td>
                        </tr>
                    </table>
                </div>
            </form>
        </fieldset>
    </div>
    
    <br>

    <div align="center">
        <?php include 'footer.php'; ?>
    </div>
        
</body>
</html>




