
<head>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<?php
// $email=$_POST['email'];
// 


// $email="";
// if(isset($_POST['email'])){$email=$_POST['email']};
// $email = isset($_POST['email']) ? $_POST['email'] : '';
$email=$_POST['email'];

$servername="localhost";
$username="root";
$password="";
$dbname="database";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT email from users where email = '$email'";	
// echo $email;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $conn = mysqli_connect($servername, $username, $password);
// if(!$conn){
// 	$error = "Error connecting database...";
// }

//mysqli_select_db($conn,$dbname);

// $result = mysqli_query($conn,$sql);
// $rows = mysqli_fetch_array($result);


$result=$conn->query($sql);

if($result->num_rows>0){
	echo '<i class="fas fa-times"></i> Sorry...email address already exists!';
}
else{
	echo "hi";
}
// else {
// 	echo "";
// }


// if ($rows) {
// 	echo "Sorry...email address already exists!";
// }
// else{
//   echo "Hi";
// }


$conn->close();
?>

