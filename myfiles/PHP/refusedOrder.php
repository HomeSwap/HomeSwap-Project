
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

$sqlContact1="SELECT Fname, email  FROM users 
WHERE (userID='$userID')";

$sqlContact2="SELECT Fname, email  FROM users 
WHERE (userID='$RequesterID')";

 $result1=$conn->query($sqlContact1);
 $result2=$conn->query($sqlContact2);

 if($result1->num_rows>0){
      while ($row=$result1->fetch_assoc()){
      	$fnameUser=$row["Fname"];
      	$to=$row["email"];
  
    }

  }

 if($result2->num_rows>0){
      while ($row=$result2->fetch_assoc()){
       	$fnameRequester=$row["Fname"];
      	$emailRequester=$row["email"];
    }
  }

  $from = "info@HomeSwap.com";
	$subject = "Your Swap has been rejected!";
  $message = '<html><body>';
  $message .= '<h5>Hello, <br> We would like to informed you that your book request has been rejected. </h5><br><br>';
  $message .= "<button style='background-color:blue; height:60px;'><a style='text-decoration:none; color:#ffffff;' href='..\BookApartmentRefused.php?AptID=$AptID&RequesterAptID=$RequesterAptID&userID=$userID&RequesterID=$RequesterID&StartDate=$StartDate&EndDate=$EndDate'>Click to check the apartment</a></button>";
  $message .= "</body></html>";
    $headers = "From:" . $from;
    $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers.="Cc: ".$emailRequester;

    mail($to,$subject,$message,$headers);

    //echo $message;
    header("Location:..\sendPage6.php?userID=$userID");
//} else {
//	echo "Error: " . $sqlDelete1 . "<br>" . $conn->error;
//	echo "Error: " . $sqlDelete2 . "<br>" . $conn->error;
// }

$conn->close();
?>