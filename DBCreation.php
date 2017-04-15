<?php

//Database Creation.

	$servername = 'localhost';
	$username = 'root';
	$password = '8781206486579945';
	$databasename = "MyDataBase";
	$connection = new mysqli($servername,$username,$password);
	if ($connection->connect_error) {
		die('<b>Failled to connect </b>'.$connection->connect_error);
	}
	else
	{
		echo "<b>Connected successfully .</b><br><br>";
	}
	$request = "CREATE DATABASE ".$databasename;
	if ($connection->query($request) === TRUE) {
		echo "<b>DataBase created successfully .</b><br>";
	} else {
		die("<b>Error creating database</b> <br> - ".$connection->error."<br>");
	}
	$connection->close();
 ?>
<?php  
	$table='Contact';
	$connection = new mysqli($servername,$username,$password,$databasename);
	if ($connection->connect_error) {
		die('<b>Failled to connect to database </b>'.$connection->connect_error);
	}
	else
	{
		echo "<b>Connected to database successfully .</b><br><br>";
	}
	$request='CREATE TABLE '.$table .'(
		id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name varchar(50) NOT NULL,
		email varchar(50) NOT NULL,
		message varchar(500) NOT NULL 
	)';
	if ($connection->query($request) === TRUE) {
		echo "<b>Table ".$table." created successfully .</b><br>";
	} else {
		die("<b>Error creating table <u>".$table."</u></b> <br> - ".$connection->error."<br>");
	}
	$table='Event';
	
	$request='CREATE TABLE '.$table .'(
		id varchar(20) PRIMARY KEY,
		name varchar(50) NOT NULL,
		mapsrc varchar(500) NOT NULL 
	)';
	if ($connection->query($request) === TRUE) {
		echo "<b>Table ".$table." created successfully .</b><br>";
	} else {
		die("<b>Error creating table <u>".$table."</u></b> <br> - ".$connection->error."<br>");
	}
	function _date($day)
	{
		$date=date_create("2014-04-12");
		date_add($date,date_interval_create_from_date_string($day));
		echo date_format($date,"Y-m-d");
	}
	
	$request="INSERT INTO ".$table ." VALUES('14April','Event1','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819283.8164491164!2d1.0257337843652543!3d46.365283851351606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sfr!2sfr!4v1492259645237')
	";
	if ($connection->query($request) === TRUE) {
		echo "<b>Inserted successfully .</b><br>";
	} else {
		die("<b>Error inserting data </b> <br> - ".$connection->error."<br>");
	}
	$request="INSERT INTO ".$table ." VALUES('15April','Event2','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6524287.811914524!2d-68.22119664735148!3d-37.01725308644728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaf5f5fdc667%3A0x3d2f77992af00fa8!2sArgentine!5e0!3m2!1sfr!2sfr!4v1492260481620')";
	if ($connection->query($request) === TRUE) {
		echo "<b>Inserted successfully .</b><br>";
	} else {
		die("<b>Error inserting data </b> <br> - ".$connection->error."<br>");
	}
	$request="INSERT INTO ".$table ." VALUES('16April','Event3','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4009455.306223593!2d15.548272447667161!3d-11.077282655910158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f24ecaad8b27%3A0x590a289d0d4a4e3d!2sAngola!5e0!3m2!1sfr!2sfr!4v1492260556756')";
	if ($connection->query($request) === TRUE) {
		echo "<b>Inserted successfully .</b><br>";
	} else {
		die("<b>Error inserting data </b> <br> - ".$connection->error."<br>");
	}
	$request="INSERT INTO ".$table ." VALUES('17April','Event4','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113023.8243358857!2d-4.867757296672452!3d40.36314230828423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc42e3783261bc8b%3A0xa6ec2c940768a3ec!2sEspagne!5e0!3m2!1sfr!2sfr!4v1492263911584')";
	if ($connection->query($request) === TRUE) {
		echo "<b>Inserted successfully .</b><br>";
	} else {
		die("<b>Error inserting data </b> <br> - ".$connection->error."<br>");
	}
	$connection->close();

 ?>