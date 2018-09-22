<?php

  $servername="zebra";
  $username="shirba";
  $password="nD(-cmTvuivT";
  $dbname="shirba_database";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if ($conn->connect_error)
  {
    die("connection failed: ".$conn->connect_error);
  }

    $RequesterID=$_POST['RequesterID'];
    $userID=$_POST['userID'];
    $AptID=$_POST['AptID'];
    $to = $_POST['hostEmail']; 
    $from = "info@HomeSwap.com"; 
    $first_name = $_POST['hostName'];
    $StartDate=$_POST['StartDate'];
    $EndDate=$_POST['EndDate'];

     $sql="SELECT AptID from apartments WHERE userID=$RequesterID";


    $sqlUser = "SELECT Fname from users where userID = '$RequesterID'";

    $resultUser = mysqli_query($conn,$sqlUser);
      $rows = mysqli_fetch_array($resultUser);


      if ($rows){
        $fname=$rows['Fname'];
      } 

     $result=$conn->query($sql);
    if($result->num_rows>0){
      while ($row=$result->fetch_assoc()){
      $RequesterAptID=$row["AptID"];
    }

    }

  $subject = "New Request From HomeSwap";
  $message = '<html><body style="text-align:center;">';
  $message .= '<h5>Hello, '.$first_name.'.<br> You have a new book request for your apartment </h5><br><br>';
  $message .= "<button style='background-color:#3b2d8c; height:40px;'><a style='text-decoration:none; color:#ffffff;' href='http://shirba.mtacloud.co.il/BookApartmentApproval.php?AptID=$AptID&RequesterAptID=$RequesterAptID&userID=$userID&RequesterID=$RequesterID&StartDate=$StartDate&EndDate=$EndDate'>Click to check the apartment</a></button><br><br>";
  //$message .= '<div><img src="http://tinypic.com/r/r929v6/9" height=70px width=140px></div>';
  $message .= '<h4 style="color:#3b2d8c;"><b>HomeSwap</b></h4>';
  $message .= "</body></html>";
  $headers = "From:" . $from;
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail($to,$subject,$message,$headers);

    //echo $message;

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
      <a class="navbar-brand" href="indexUser.php?userID=<?php echo $RequesterID ?>"><img src="css/pics/HomeSwapLogo.png" height=39px; width=39px;> &nbsp; HomeSwap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
      
          <li class="nav-item">
            <a class="nav-link" href="Search.php?userID=<?php echo $RequesterID ?>">Search For Apartment</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href='Orders.php?userID=<?php echo $RequesterID?>'>My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="GoogleLogin/Logout.php">Logout</a>
          </li>
            <li class="nav-item active">
            <a href="#" class="nav-link" style="color:#B39CD0;">&nbsp;&nbsp;Welcome, <?php  echo $fname ?> </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>


<div class="container center" style="padding:128px 16px">
  <h1><i class="fas fa-check-circle" style="color:green;"></i> Thank you for your request.</h1>
  <h4>We will inform you as soon as the host will response to your request</h4>
  <br><br>
  <a href='indexUser.php?userID=<?php echo $RequesterID ?>' class="btn btn-primary btn-lg">Go to home page</a>
  

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

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
