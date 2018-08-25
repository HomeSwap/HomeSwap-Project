<?php
// $email=$_POST['email'];
// 


// $email="";
// if(isset($_POST['email'])){$email=$_POST['email']};
$email = isset($_POST['email']) ? $_POST['email'] : '';

$servername="localhost";
$username="root";
$password="";
$dbname="database";

$sql = "SELECT * from users where email = '$email'";	
echo $email;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $conn = mysqli_connect($servername, $username, $password);
// if(!$conn){
// 	$error = "Error connecting database...";
// }

//mysqli_select_db($conn,$dbname);

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);

if ($rows) {
	echo "Sorry...email address already exists!";
}
else{
  echo "Hi";
}


$conn->close();
?>

