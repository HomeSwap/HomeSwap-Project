
<?php


$servername="zebra";
$username="shirba";
$password="nD(-cmTvuivT";
$dbname="shirba_database";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$AptID=$_REQUEST['AptID'];
$userID=$_REQUEST['userID'];
$TempReview=$_POST['review'];
$rate=$_POST['rating'];


$review=str_replace("'", "''", $TempReview);



$sql="INSERT INTO reviews (Review, rate, AptID, userID) VALUES ('$review', '$rate', '$AptID', '$userID')";


	if ($conn->query($sql) === TRUE) {
		header("Location:..\Orders.php?userID=$userID");
	

	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}






$conn->close();
?>