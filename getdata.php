<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "localcare";
$password = "zd0wTE00-{yv";
$dbname = "localcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,mobile,email,package,address FROM user_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
	<th>Name</th>
	<th>Mobile</th>
	<th>Email</th>
	<th>Package</th>
	<th>Address</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>" . $row["name"]. "</td>
		<td>" . $row["mobile"]. " </td>
		<td>" . $row["email"]. " </td>
		<td>" . $row["package"]. " </td>
		<td>" . $row["address"]. " </td>
		</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>