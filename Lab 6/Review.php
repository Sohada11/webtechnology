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
body {
background-color: mistyrose;
}
<div class="full-page">
<?php include 'header.php'; ?>
</div>

<br>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
* {
box-sizing: border-box;
}



body {
font-family: Arial;
padding: 10px;
background: lavenderblush ;
}



/* Header/Blog Title */
.header {
padding: 30px;
text-align: center;
background: white;
}



.header h1 {
font-size: 50px;
}



/* Style the top navigation bar */
.topnav {
overflow: hidden;
background-color: #333;
}



/* Style the topnav links */
.topnav a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}



/* Change color on hover */
.topnav a:hover {
background-color: LavenderBlush ;
color: black;
}



/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
float: left;
width: 85%;
}



/* Right column */
.rightcolumn {
float: left;
width: 25%;
background-color: LavenderBlush;
padding-left: 20px;
}



/* Fake image */
.fakeimg {
background-color: #aaa;
width: 100%;
padding: 20px;
}



/* Add a card effect for articles */
.card {
background-color: white ;
padding: 20px;
margin-top: 20px;
}



/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}



/* Footer */
.footer {
padding: 20px;
text-align: center;
background: silver;
margin-top: 20px;
}



/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
.leftcolumn, .rightcolumn {
width: 100%;
padding: 0;
}
}



/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
.topnav a {
float: none;
width: 100%;
}
}
</style>


</head>
<body>


<div class="header">
<h1>Reviews</h1>
</div>


<div class="topnav">
<li><a href="indigo.php">Indigo</a></li>
<a href="#" style="float:right"></a>
</div>

<div class="row">
<div class="leftcolumn">
<div class="card">
<h2>Client 1: Sarah</h2>
<p>Great photography skills, very patient. Budget friendly</p>
<div class="review">
<img src="image1.jpg" >
</div>

<div></div>


</div>
<div class="card">
<h2>Client 2: Zubiya</h2>
<p>In love with Snapshot photography! The best in town...</p>
<div class="review">
<img src="image15.jpg" >
</div>

<div ></div>



<div class="card">
<h2>Client 3: Ayeza</h2>
<p>Such a budget friendly package with outstanding services!!</p>
<div class="review">
<img src="image16.jpg" >
</div>
<br>
<br>




<div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.."style="height:200px" "width:200px"></textarea>
    </div>

    
<div class="row">
    <input type="submit" value="Submit">

  </div>


<div align="center">
        <?php include 'footer.php'; ?>
    </div>



</body>
</html>