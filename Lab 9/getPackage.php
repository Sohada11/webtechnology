<?php
$client = new client("servername", "username", "password", "dbname");
if($client->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT package, package, Amount, Action,
FROM photographer WHERE client = ?";

$stmt = $client->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($package, $Description, $Amount, $Action);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>package</th>";
echo "<td>" . $package . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "<th>Description</th>";
echo "<td>" . $Description . "</td>";
echo "<th>Amount</th>";
echo "<td>" . $Amount . "</td>";
echo "<th>Action</th>";
echo "<td>" . $Action . "</td>";
echo "</table>";
?>