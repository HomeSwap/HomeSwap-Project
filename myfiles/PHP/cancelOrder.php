
<?php


$servername="localhost";
$username="root";
$password="";
$dbname="database";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$userID=$_REQUEST['userID'];
$AptID=$_REQUEST['AptID'];
$StartDate=$_REQUEST['StartDate'];
$EndDate=$_REQUEST['EndDate'];

// echo ("hi");
// echo ($userID);
// echo ($AptID);
// echo $StartDate;
// echo $EndDate;

$sqlOrder="SELECT * FROM orders 
WHERE ((StartDate='$StartDate') And (EndDate='$EndDate') AND 
       ((RequesterID='$userID')OR (userID='$userID')))";


$resSqlOrder=$conn->query($sqlOrder);


if($resSqlOrder->num_rows>0){
    while ($row=$resSqlOrder->fetch_assoc()){
        $tempUserId1=$row['userID']; 
        $tempUserId2=$row['RequesterID']; 
        $tempApt1 = $row['AptID'];
        $tempApt2 = $row['RequesterAptID'];
       
      
  //        $orderID=$row["orderID"];
    }
   }       


if ($tempUserId1==$userID){
  
    $sqlTemp1="SELECT Fname, email FROM users WHERE userID='$tempUserId2'";

    $resTemp1=$conn->query($sqlTemp1);


    if($resTemp1->num_rows>0){
      while ($row=$resTemp1->fetch_assoc()){
        $fname=$row['Fname'];
        $to=$row['email'];
     
         
  //        $orderID=$row["orderID"];
    }
   }
      $from = "info@HomeSwap.com";

    // if (($conn->query($sqlDelete1) === TRUE)&&($conn->query($sqlDelete2)===TRUE)) {
      $subject = "Your Swap has been canceled!";
      $message = '<html><body>';
      $message .= '<h5>Hello, '.$fname.' <br> We would like to informed you that your book request has been canceled. </h5><br><br>';
      $message .= "<button style='background-color:blue; height:60px;'><a style='text-decoration:none; color:#ffffff;' href='..\ViewOrder.php?AptID=$tempApt1&userID=$tempUserId2&StartDate=$StartDate&EndDate=$EndDate'>Click for more details</a></button>";
      $message .= "</body></html>";
        $headers = "From:" . $from;
        $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       // $headers.="Cc: ".$emailRequester;

        mail($to,$subject,$message,$headers);
        // header('Location: mailSendPage.html');

        //echo $message;   


}
else if ($tempUserId2==$userID){
  
    $sqlTemp2="SELECT Fname, email FROM users WHERE userID='$tempUserId1'";


    $resTemp2=$conn->query($sqlTemp2);


    if($resTemp2->num_rows>0){
      while ($row=$resTemp2->fetch_assoc()){
        $fname=$row['Fname'];
        $to=$row['email'];


    }
   }  
    $from = "info@HomeSwap.com";

    // if (($conn->query($sqlDelete1) === TRUE)&&($conn->query($sqlDelete2)===TRUE)) {
      $subject = "Your Swap has been canceled!";
      $message = '<html><body>';
      $message .= '<h5>Hello, '.$fname.' <br> We would like to informed you that your book request has been canceled. </h5><br><br>';
      $message .= "<button style='background-color:blue; height:60px;'><a style='text-decoration:none; color:#ffffff;' href='..\ViewOrder.php?AptID=$tempApt2&userID=$tempUserId1&StartDate=$StartDate&EndDate=$EndDate'>Click for more details</a></button>";
      $message .= "</body></html>";
        $headers = "From:" . $from;
        $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       // $headers.="Cc: ".$emailRequester;

        mail($to,$subject,$message,$headers);
        // header('Location: mailSendPage.html');

        //echo $message; 
  //        $orderID=$row["orderID"];
}


$sqlDelete1 = "DELETE FROM orders 
 WHERE ((RequesterAptID = '$AptID') AND (StartDate='$StartDate') And (EndDate='$EndDate')AND (userID='$userID'))";

$sqlDelete2 = "DELETE FROM orders 
WHERE ((AptID = '$AptID') AND (StartDate='$StartDate') And (EndDate='$EndDate')AND (RequesterID='$userID'))";

////////////////////////////////////////


 $result1=$conn->query($sqlDelete1);
 $result2=$conn->query($sqlDelete2);


header("Location:../Orders.php?userID=$userID");




$conn->close();
?>