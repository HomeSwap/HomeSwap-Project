
<head>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<?php

$email=$_POST['email'];

$servername="zebra";
$username="shirba";
$password="nD(-cmTvuivT";
$dbname="shirba_database";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT email from users where email = '$email'";	

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result=$conn->query($sql);

if($result->num_rows>0){
	echo '<i class="fas fa-times"></i> Sorry...email address already exists!';
}
else{
	echo "hi";
}

$conn->close();
?>

