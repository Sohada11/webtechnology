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
    
                    <br>

    <div class="full-page">
            <div class="full-page">
            <?php include 'header.php'; ?>
    </div>



<!DOCTYPE html>
<html>
<body>

<h2>Search for our amazing Vendors for your Big Day</h2>
<br>
<div style="border: 1px solid black; color: black; font-size: 35px; font-style:italic;">
<p> Please enter the name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>
<p> Suggested vendors: <span id="txtHint"></span></p> 
</div>
<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "gethint.php?q="+str);
  xhttp.send();   
}
</script>

</body>
</html>

<br>
<br>
<br>




<br>
<br>
<br>



<div align="center">
        <?php include 'footer.php'; ?>
    </div>
        
</body>
</html>