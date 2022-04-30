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
	<meta charset="UTF-8">
    <title>DashBoard</title>

</head>
<body >
    <style>
.right {
  float: right;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
    <style>
     body {
  background-color: mistyrose;
}
    <div class="full-page">
            <?php include 'header.php'; ?>
    </div>

    <div style="border: 3px solid silver; width: 100%; margin-top: 140px; color: black; font-size: 20px; float: left">
        <fieldset>
            <form>
                <div>
                    <table>
                        <tr>
                            <td style="width: 300px;">
                                <br>
                                <ul>
                                    <li><a href="DashBoard.php">Dashboard</a></li>
                                    <li><a href="OfferService.php">Offer Service</a></li>
                                    <li><a href="clientrequest.php">Client Request</a></li>
                                    <li><a href="ProfilePage.php">View Profile</a></li>
                                    
                                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                                    <li><a href="ChangePassword.php">Change Password</a></li>
                                    <li><a href="LogOut.php">Logout</a></li>
                                </ul>
                            </td>
                            <td style="width: 1000px; font-size: 35px; text-align: center; vertical-align: text-top;">Welcome to Wed Site <b><?php echo $_SESSION['uname'];?></b></td>
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




