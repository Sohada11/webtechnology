<?php  
require_once 'controller/VendorInfo.php';

$vendors = fetchAllVendors();

?>	
   <div>
		<?php include 'header.php'?>
	</div>


<!DOCTYPE html>
<html>
<head>
		<style>
  background-color: thistle;
  opacity: 0.3;
</style>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>package</th>
			<th>Description</th>
			<th>Amount</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($photographer as $i => $photographer): ?>
			<tr>
				<td><a href="showvendor.php?id=<?php echo $photographer['id'] ?>"><?php echo $photographer['name'] ?></a></td>
				<td><?php echo $photographer['package'] ?></td>
				<td><?php echo $photographer['Description'] ?></td>
				<td><?php echo $photographer['Amount'] ?></td>
				<td><?php echo $photographer['Action'] ?></td>
				<td><a href="Booking.php?id=<?php echo $vendor['id'] ?>">Edit</a>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>




<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<h1>Introducing Our Team</h1>

<button type="button" onclick="loadDoc()">Show</button>
<br><br>
<table id="demo"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "package.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Artist</th><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("WORK")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>



<body>
     <style>
     body {
  background-color: lavender;
}
<br>
<br>
<br>



<div align="center">
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>