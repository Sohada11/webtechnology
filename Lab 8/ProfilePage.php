<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lavenderblush;

}
</style>
</head>
<?php
$name = $n = $e = $g = $db =$im = ""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:LoginPage.php");
}

            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
            if($un==$name){
               $n = $Info->Name;
               $e = $Info->Email ;
               $g = $Info->Gender ;
               $db =$Info->Date_of_Birth ;
               $im = $Info->Image ;

              }
            }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Profile</title>


</head>
<body >
    <div class="full-page">
            <?php include 'header.php'; ?>
    </div>

    <br>

    <div style="border: 1px solid blue; width: 25%; height: 300px;margin-top: 32px; color: blue; font-size: 20px; float: left">
        <ul>
            <li ><a href='Dashboard.php' style= "color:blue;">Dashboard </a></li>
            <li><a href="Blog.php">Blog</a></li>
            <li><a href="EventSelect.php">Select Event</a></li>
            <li ><a href='ProfilePage.php' style= "color:blue;">View Profile  </a></li>
            <li ><a href='EditProfile.php' style= "color:blue;">Edit Profile  </a></li>
            <li ><a href='ChangeProfilePicture.php' style= "color:blue;">Change Profile Picture </a></li>
            <li ><a href='ChangePassword.php' style= "color:blue;">Change Password  </a></li>
            <li ><a href='LogOut.php' style= "color:blue;">Logout  </a></li>
        </ul>        	
    </div>


    <div>
         <div style=" color: black; font-size: 25px;">
        <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>

                <legend> <h2 class="main-heading">Profile</h2> </legend>

                <div>
                    <img src="<?php echo $im?> " alt = "<?php echo $n?> ">
                    <a href="ChangeProfilePicture.php" style= "color:blue;">Change</a>
                </div>

                <label for="name">Name  : <?php echo $n?> </label><br>
                <hr>
                <label for="email">Email  : <?php echo $e?> </label><br>
                <hr>
                <label for="gender">Gender  : <?php echo $g?> </label><br>
                <hr>
                <label for="dob">Date of Birth  : <?php echo $db?> </label><br>
                <hr>          
                <a href="EditProfile.php" style= "color:blue;">Edit Profile</a>

            </fieldset>
        </form>
    </div>
 
 <div>
     <?php include 'footer.php'; ?>
 </div>

          
</body>
</html>