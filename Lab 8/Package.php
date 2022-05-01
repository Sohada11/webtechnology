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
  background: #f1f1f1;
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
@media only screen and (min-width: 768px) {
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

<div class="header">
  <h1>Welcome to Indigo</h1>
</div>

<div class="topnav">
  <li><a href="indigo.php">Indigo</a></li>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Our Packages</h2>
     <li><a href="showAllVendors.php">Show All Photographers Package</a></li>




<h2></h2>

<form action=""> 
  <select name="customers" onchange="showPackage(this.value)">
    <option value="">Select a package:</option>
    <option value="Package1">Package1</option>
    <option value="Package2 ">Package2</option>
    <option value="Package3"> Package3</option>
    <option value="Package4">Package4</option>
  </select>
</form>
<br>
<div id="txtHint">Package info will be listed here...</div>

<script>
function showPackage(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getPackage.php?q="+str);
  xhttp.send();
}
</script>


    </div>
    <div class="card">
      <h5>We try to give you the best service</h5>
      <p>Our Works</p>
             <img src="image9.jpg" >
             <div class="Blogs" style="height:50px;"></div>
             <img src="image11.jpg" >
             
             <div class="Blogs" style="height:50px;"></div>
             <img src="image3.jpg" >
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Us</h2>
      <div class="fakeimg" style="height:100px;">Book through us and get the best vendors for your big days. We create memories with magic</div>

    </div>
    <div class="card">
      <div class="Blogs">
        <p>Our Works</p>
             <img src="image14.jpg" >
             <div class="Blogs" style="height:50px;"></div>
             <img src="image13.jpg" >
             
             <div class="Blogs" style="height:50px;"></div>
             <img src="image12.jpg" >
        </div>
    </div>
  </div>
</div>

<div align="center">
        <?php include 'footer.php'; ?>
    </div>

</body>
</html>


