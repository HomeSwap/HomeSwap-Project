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

  $userID = $_REQUEST["userID"];

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
       <a class="navbar-brand" href="index.php"><img src="css/pics/HomeSwapLogo.png" height=39px; width=39px;> &nbsp;HomeSwap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="Registration.html">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="GoogleLogin/Login.php">Login</a>
          </li>
                      <li class="nav-item active">
            <a href="#" class="nav-link" style="color:#B39CD0;">&nbsp;&nbsp;Welcome, Guest!</a>
            </li>
<!--           <li class="nav-item">
            <a class="nav-link" href="newApartment.html">New apartment</a>
          </li>      -->     
<!--           <li class="nav-item">
            <a class="nav-link" href="Search.html">search</a>
          </li> -->
<!--           <li class="nav-item">
            <a class="nav-link" href="SearchResults.html">search Results</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="BookApartment.html">book Apartment</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>


<div class="container center" style="padding:128px 16px">
  <h1>Thank you for registering on our website.</h1>
  <h4>You are just one step away from start your jurney! </h4>
  <br><br>
  <a href="newApartment.php?userID=<?php echo $userID ?>" class="btn btn-primary btn-lg">Click to add your apartment</a>
  

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
