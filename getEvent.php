<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php $q = $_GET['q'];
	$servername = 'localhost';
	$username = 'root';
	$password = '8781206486579945';
	$databasename = "MyDataBase";
	$connection = new mysqli($servername,$username,$password,$databasename);
	if ($connection->connect_error) {
		die('<b>Failled to connect to database </b>'.$connection->connect_error);
	}
	mysqli_select_db($connection,"MyDataBase");
	$sql="SELECT * FROM Event WHERE id = '".$q."'";
	$result = mysqli_query($connection,$sql);
	$row = mysqli_fetch_array($result);
	echo "<div class='jumbotron'><h1>".$row['name']."</h1></div>";
	echo "<iframe width='100%' height='500px' src='".$row['mapsrc']."'></iframe>";
?>
</body>
</html>