<?php

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="database";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if ($conn->connect_error)
  {
    die("connection failed: ".$conn->connect_error);
  }

 

    $userID=$_REQUEST['userID'];
    $orderID=$_REQUEST['orderID'];
    // $RequesterID=$_POST['RequesterID'];
   
    // $AptID=$_POST['AptID'];
    // $to = $_POST['hostEmail']; // this is my Email address
    // $from = "info@HomeSwap.com"; // this is the sender's Email address
    // $first_name = $_POST['hostName'];
    // // $last_name = $_POST['last_name'];
    // $StartDate=$_POST['StartDate'];
    // $EndDate=$_POST['EndDate'];


$sql = "SELECT Fname from users where userID = '$userID'";  

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $conn = mysqli_connect($servername, $username, $password);
// if(!$conn){
//  $error = "Error connecting database...";
// }

//mysqli_select_db($conn,$dbname);

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);


if ($rows){
  $fname=$rows['Fname'];
}

$conn->close();


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HomeSwap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style>

body{
  line-height: 1.5;
  text-align: center;
}
</style>
  </head>

  <body>

<!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="indexUser.php?userID=<?php echo $userID ?>"><img src="css/pics/HomeSwapLogo.png" height=39px; width=39px;> &nbsp; HomeSwap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
      
          <li class="nav-item">
            <a class="nav-link" href="Search.php?userID=<?php echo $userID ?>">Search For Apartment</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href='Orders.php?userID=<?php echo $userID?>'>My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="GoogleLogin/Logout.php">Logout</a>
          </li>
            <li class="nav-item active">
            <a href="#" class="nav-link" style="color:#B39CD0;">&nbsp;&nbsp;Welcome, <?php echo $fname; ?> </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>




<div class="container center" style="padding:128px 16px">
  <h1><i class="fas fa-check-circle" style="color:green;"></i> Your Swap has been approved!</h1>
  <h4>Your order number is: <b>#<?php echo $orderID ?></b></h4>
  <br><br>
  <a href="indexUser.php?userID=<?php echo $userID ?>" class="btn btn-primary btn-lg">Go to home page</a>
  

</div>

<br><br>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"> &copy; HomeSwap 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
