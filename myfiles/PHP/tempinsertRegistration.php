
<?php
	$userID=$_POST['userID'];
	$Fname=$_POST['Fname'];
	$email=$_POST['email'];
	$Lname=$_POST['Lname'];
	$pass=$_POST['password'];
	$phone=$_POST['phone'];
	$country=$_POST['country'];
	$city=$_POST['city'];
	$street=$_POST['street'];
	$aptNum=$_POST['aptNum'];
	$zipCode=$_POST['zipCode'];


//checkbox
$tripArr=$_POST['tripType']; //save in array variable
$userTripType=implode(",",$tripArr); //add comma ,

$ameniArr=$_POST['amenities']; //save in array variable
$userAmeni=implode(",",$ameniArr); //add comma ,

$reqArr=$_POST['requests']; //save in array variable
$userReq=implode(",",$reqArr); //add comma ,

$accessArr=$_POST['accessibilityNeeds']; //save in array variable
$userAcces=implode(",",$accessArr); //add comma ,


$servername="localhost";
$username="root";
$password="";
$dbname="database";
	

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (userID, Fname, Lname, email, password, phone, country, city, street, aptNum, zipCode, tripType, amenities, requests, accessibilityNeeds)
VALUES ('$userID', '$Fname', '$Lname' , '$email', '$pass', '$phone', '$country', '$city', '$street', '$aptNum', '$zipCode', '$userTripType', '$userAmeni', '$userReq' , '$userAcces')";

if ($conn->query($sql) === TRUE) {
	header("Location:..\sendPage.html");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>