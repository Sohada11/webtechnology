<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="indigo.css">
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
  background:   lavenderblush;
  /*#D3D3D3*/
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
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="full-page">
            <?php include 'header.php'; ?>
    </div>
<div class="header">
  <h1>Indigo Photography</h1>
</div>

<div class="topnav">
  <a href="#">Album</a>
  <li><a href="Dashboard.php">Dashboard</a></li>
  <a href="#" style="float:right"></a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Our Story</h2>
      <h5>In 2012, we started Indigo Photography with the vision of preserving the most genuine moments from weddings. To us, weddings are about celebrating people in love, among their closest family and friends. Our primary focus is always on the bonds you share with the people who matter.

We try to look beyond the glitz and glamour of a wedding, and photograph the emotions, moments and souls instead.

Also, all our team members are handpicked and most of us are passionate about the art of photography and don't see it as only work</h5>
     

      <div class="indigo" style="height:50px;"></div>
    </div>

    <div class="card">
      <h2>Our Brides</h2>
      <h5>Pictures of our beautiful brides to take the best inspirations</h5>
      <div class="Blogs">
             <img src="image10.jpg" >
             <div class="Blogs" style="height:50px;"></div>
             <img src="image7.jpg" >
             <div class="Blogs" style="height:50px;"></div>
             <img src="image9.jpg" >
             <div class="Blogs" style="height:50px;"></div>
        </div>
      <div class="Blogs" style="height:50px;"></div>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Us</h2>
      <div class="Blogs" style="height:100px;">REMINISCE YOUR MEMORIES THROUGH OUR PHOTOGRAPHS</div>
    </div>
    
    <div class="card">
      <h3></h3>
      <br>


			<td>
								<fieldset style="width:200px; height:200px;">
									<table>
										<tr>
											<ul>
												<li><a href="Portfolio.php">Portfolio</a></li>
												<div class="Blogs" style="height:10px;"></div>
												<li><a href="Package.php">Packages</a></li>
												<div class="Blogs" style="height:10px;"></div>
												<li><a href="Booking.php">Booking</a></li>
                        <div class="Blogs" style="height:10px;"></div>
                        <li><a href="Review.php">See Reviews</a></li>
											</ul>
										</tr>										
									</table> <br>
								</fieldset>
							</td>
    </div>
  </div>
</div>
</head>
<body >
    


	<div align="center">
		<?php include 'footer.php'?>
	</div>
</body>
</html>