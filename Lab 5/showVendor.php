<?php  
require_once 'controller/VendorInfo.php';

$vendor = fetchVendor($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>Username</th>
		<th>Password</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showvendor.php?id=<?php echo $vendor['ID'] ?>"><?php echo $vendor['Name'] ?></a></td>
		<td><?php echo $vendor['Surname'] ?></td>
		<td><?php echo $vendor['Username'] ?></td>
		<td><?php echo $vendor['Password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $vendor['image'] ?>" alt="<?php echo $vendor['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>