
<?php
	$userID=$_POST['userID'];
	$Fname=$_POST['Fname'];
	$email=$_POST['email'];
	$Lname=$_POST['Lname'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$country=$_POST['country'];
	$city=$_POST['city'];
	$street=$_POST['street'];
	$aptNum=$_POST['aptNum'];
	$zipCode=$_POST['zipCode'];


	$servername="localhost";
	$username="root";
	$password="";
	$dbname="database";
	

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (Fname, Lname, userID, email, password, phone, country, city, street, aptNum, zipCode)
VALUES ('$Fname', '$Lname', '$userID', '$email', '$password', '$phone', '$country', '$city', '$street', '$aptNum', '$zipCode')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>