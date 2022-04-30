<?php  
require_once 'controller/VendorInfo.php';

$vendors = fetchAllVendors();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Username</th>
			<th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($vendors as $i => $vendor): ?>
			<tr>
				<td><a href="showvendor.php?id=<?php echo $vendor['ID'] ?>"><?php echo $vendor['Name'] ?></a></td>
				<td><?php echo $vendor['Surname'] ?></td>
				<td><?php echo $vendor['Username'] ?></td>
				<td><?php echo $vendor['Password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $vendor['image'] ?>" alt="<?php echo $vendor['Name'] ?>"></td>
				<td><a href="editvendor.php?id=<?php echo $vendor['ID'] ?>">Edit</a>&nbsp<a href="controller/deletevendor.php?id=<?php echo $vendor['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>