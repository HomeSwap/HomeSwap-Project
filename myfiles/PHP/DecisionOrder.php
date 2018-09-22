
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

$userID=$_POST['userID'];
$AptID=$_POST['AptID'];
$StartDate=$_POST['StartDate'];
$EndDate=$_POST['EndDate'];
$status='Approved';
$RequesterID=$_POST['RequesterID'];
$RequesterAptID=$_POST['RequesterAptID'];

$sqlContact2="SELECT Fname, email  FROM users 
WHERE (userID='$RequesterID')";

$sqlContact3="SELECT orderID  FROM orders 
WHERE (userID='$userID')";

 $result2=$conn->query($sqlContact2);
 $result3=$conn->query($sqlContact3);

 if($result2->num_rows>0){
      while ($row=$result2->fetch_assoc()){
       	$fnameRequester=$row["Fname"];
      	$to=$row["email"];
    }
  }

   if($result3->num_rows>0){
      while ($row=$result3->fetch_assoc()){
       	$orderID=$row["orderID"];
    }
  }

if (isset($_POST['approve'])){
	$sql="INSERT INTO orders (StartDate, EndDate, status, AptID, userID, RequesterID, RequesterAptID) VALUES ('$StartDate', '$EndDate', '$status', '$AptID','$userID', '$RequesterID', '$RequesterAptID')";

	if ($conn->query($sql) === TRUE) {
		$orderID = $conn->insert_id;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$sqlDelete1 = "DELETE FROM apt_availability 
	WHERE ((AptID = '$AptID') AND (StartDate='$StartDate') And (EndDate='$EndDate'))";

	$sqlDelete2 = "DELETE FROM apt_availability WHERE ((AptID = '$RequesterAptID') AND (StartDate='$StartDate') And (EndDate='$EndDate'))
	";


	  $from = "info@HomeSwap.com";

	if (($conn->query($sqlDelete1) === TRUE)&&($conn->query($sqlDelete2)===TRUE)) {
	  $subject = "Your Swap has been approved!";
	  $message = "<html><body style='text-align:center; color:#000000;'>";
	  $message .= '<h5>Hello, '.$fnameRequester.'</h5>';
	  $message .= '<h5> We are glad to informed you that your book request has been approved. </h5>';
	  $message .= '<h5>Your Order number is: #'.$orderID.'</h5>';
	  $message .= '<h5>Enjoy your trip! </h5>';
	  $message .= '<h4 style="color:#3b2d8c;"><b>HomeSwap</b></h4>';
	  $message .= "</body></html>";
	  $headers = "From:" . $from;
	  $headers = "MIME-Version: 1.0" . "\r\n";
	  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	  mail($to,$subject,$message,$headers);
	    
	    header("Location:..\sendPage5.php?userID=$userID&orderID=$orderID");
	}
	else {
		echo "Error: " . $sqlDelete1 . "<br>" . $conn->error;
		echo "Error: " . $sqlDelete2 . "<br>" . $conn->error;
	}
}

 	elseif (isset($_POST['refuse'])) {

 	$from = "info@HomeSwap.com";
	$subject = "Your Swap has been rejected!";
  	$message = "<html><body style='text-align:center; color:black;'>";
  	$message .= '<h5>Hello, '.$fnameRequester.' <br> We would like to informed you that your book request has been rejected. </h5><br><br>';
  	$message .= "<button style='background-color:#3b2d8c; height:40px;'><a style='text-decoration:none; color:#ffffff;' href='http://shirba.mtacloud.co.il/BookApartmentRefused.php?AptID=$AptID&userID=$RequesterID&RequesterID=$RequesterID&StartDate=$StartDate&EndDate=$EndDate'>Click to check the apartment</a></button>";
  	$message .= '<h4 style="color:#3b2d8c;"><b>HomeSwap</b></h4>';
  	$message .= "</body></html>";
    $headers = "From:" . $from;
    $headers = "MIME-Version: 1.0" . "\r\n";
  	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);
   
    header("Location:..\sendPage6.php?userID=$userID");

} 

$conn->close();
?>