<?php  
require_once 'controller/VendorInfo.php';

$vendor = fetchVendor($_GET['id']);


    <div>
		<?php include 'header.php'?>
	</div>


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>

	<tr>
			<th>package</th>
			<th>Description</th>
			<th>Amount</th>
			<th>Action</th>
	</tr>
	<tr>
				<td><a href="showVendor.php?id=<?php echo $photographer['id'] ?>"><?php echo $photographer['package'] ?></a></td>
				<td><?php echo $photographer['package'] ?></td>
				<td><?php echo $photographer['Description'] ?></td>
				<td><?php echo $photographer['Amount'] ?></td>
				<td><?php echo $photographer['Action'] ?></td>
	</tr>

</table>


</body>
</html>