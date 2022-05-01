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
    <link rel="stylesheet" type="text/css" href="Blog.css">
	<meta charset="UTF-8">
    <title>DashBoard</title>


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
  background:   #D3D3D3;
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
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
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
  background-color: white;
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
  background: #ddd;
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
@media screen and (max-width: 800px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 790px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<body>
<div class="full-page">
            <?php include 'header.php'; ?>
    </div>
<div class="header">
  <h1>Blogs</h1>
</div>

<div class="topnav">

  <li><a href="Dashboard.php">Dashboard</a></li>
  <a href="#" style="float:right"></a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Aspire to Inspire</h2>
      <h5>We create memories with magic</h5>
      <div class="Blogs">
             <img src="image1.jpg" >
        </div>
      <p>Photography by Snapshot.</p>
      <p>Decorated by aesthetic events..</p>

      <div class="Blogs" style="height:50px;"></div>
             <img src="image2.jpg" >
             <p>Photography by Vows.</p>
               <p>Decorated by enchanted</p>
    </div>

    <div class="card">
      <h2>Our Brides</h2>
      <h5>Pictures of our beautiful brides to take the best inspirations</h5>
      <div class="Blogs">
             <img src="image5.jpg" >
             <p>Photography by Vows.</p>
             <div class="Blogs" style="height:50px;"></div>
             <img src="image6.jpg" >
             <p>Photography by Snapshot.</p>
             <div class="Blogs" style="height:50px;"></div>
             <img src="image7.jpg" >
             <p>Photography by Indigo.</p>
             <div class="Blogs" style="height:50px;"></div>
             <img src="image8.jpg" >
             <p>Photography by Vows.</p>
        </div>
      <div class="Blogs" style="height:50px;"></div>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="Blogs" style="height:100px;">Book through us and get the best vendors for your big days. We create memories with magic</div>
    </div>
    <div class="card">
      <h3>Popular Photographers</h3>
     <li><a href="Vows.php">Vows</a></li>
     <li><a href="Snapshot.php">Snapshot</a></li>
      <li><a href="Indigo.php">Indigo</a></li>
    </div>
    <div class="card">
      <h3>Popular Decorators </h3>
      <p>Some text..</p>
    </div>
  </div>
</div>
</head>
<body >
    

        <div align="center">
        <?php include 'footer.php'; ?>
    </div>