
<?php
	$id=$_POST['userID'];
	$name=$_POST['Fname'];
	$mail=$_POST['email'];
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="database";
	

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (userID ,Fname, email)
VALUES ('$id','$name', '$mail')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>