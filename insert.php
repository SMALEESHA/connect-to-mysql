<!DOCTYPE html >
<html>
<head>
	<title> table with database</title>
</head>
<body>
	<table>
		<tr>
			<th>username</th>
			<th>password</th>
		</tr>
<?php
$dbhost='localhost';
$usename='root';
$password='';
$db='login';

$conn=mysqli_connect("$dbhost","$usename","$password","$db");

$sql="SELECT username,password from login";
$result=$conn->query($sql);


if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo"0 result";
}
$conn->close();
?>

	</table>
</body>
</html>

