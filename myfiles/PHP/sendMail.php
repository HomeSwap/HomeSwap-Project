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
if(isset($_POST['submit'])){
    $to = "shirb27@gmail.com"; // this is my Email address
    $from = "info@HomeSwap.com"; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "New Request From HomeSwap";
	$message = '<html><body>';
	$message .= 'You have a new request for your apartment <br><br>';
	$message .= '<button><a href="https://www.google.co.il/" style="color:black; text-decoration: none">Click Me for more details</a></button>';
	$message .= "</body></html>"; 
    $headers = "From:" . $from;
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,$message,$headers);
    header('Location: mailSendPage.html');
    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="sendMail.php" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 