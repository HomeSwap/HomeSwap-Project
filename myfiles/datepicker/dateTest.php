
<?php

//server details
$servername="localhost";
$username="root";
$password="";
$dbname="database";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

//dates availabillity
$StartDate=$_POST['sd'];
$EndDate=$_POST['ed'];


$sqlDate = "INSERT INTO apartment_availability (StartDate, EndDate) VALUES (DATE '$StartDate',DATE '$EndDate')";

if ($conn->query($sqlDate) === TRUE) {
	echo "New date inserted successfully";
} else {
	echo "Error: " . $sqlDate . "<br>" . $conn->error;
}



	$conn->close();
	?>