<?php

$userID=$_REQUEST['userID'];


$servername="zebra";
$username="shirba";
$password="nD(-cmTvuivT";
$dbname="shirba_database";

$sql = "SELECT Fname from users where userID = '$userID'";  

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

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

  <title>HomeSwap - Home</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<style>
.column {
    float: left;
    width: 33%;
    margin-bottom: 16px;
    padding: 0 8px;
    margin:0 auto;
}

@media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
    padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #4D8076;
    text-align: center;
    cursor: pointer;
    width: 100%;
}

.button:hover {
    background-color: #555;
}
a{
  text-decoration: none;
  color:#ffffff;
}
a:hover{
  text-decoration: none;
  color:#ffffff;
}
#title, #title1{
    color:black;
}
#title:hover{
    color:#845EC2;
}
#title1:hover{
    color:#845EC2;
}

/* Float four columns side by side */
.column1 {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffffff;
  color: black;
  height:200px;
}

.fa {font-size:50px;}
</style>

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

  <header>
    <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" id="mainPic" style="height:500px; background-image: url('css/pics/pic3.jpg'); background-attachment:fixed;">
          <div class="carousel-caption d-none d-md-block">
          </div>

    </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Welcome to HomeSwap</h1>
      <h4>Join the thousands of people who are already swaping their homes.</h4>
      <h4>More than 220,000 apartments are being swapped, in more than 100 countries!</h4>

      <br><br>


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

  $counter=0;


$sqlApart="SELECT apt_availability.StartDate, apt_availability.EndDate, apt_photos.photoName, apartments.country, apartments.city, apartments.title, apartments.description, apartments.AptID, apartments.guestNum FROM apartments 
  INNER JOIN apt_availability ON apartments.AptID=apt_availability.AptID
  INNER JOIN apt_photos ON apartments.AptID=apt_photos.AptID
  GROUP BY apartments.AptID
";

$result1=$conn->query($sqlApart);

  if($result1->num_rows>0){
      echo '<h2>Top 6</h2>';
      echo '<div class="row">';
    while ($row=$result1->fetch_assoc()) 
    {
      if ($counter<6){

      $newStartDate = date("d/m/Y", strtotime($row["StartDate"]));
      $newEndDate = date("d/m/Y", strtotime($row["EndDate"]));
      $title=$row['title'];
      $description=$row['description'];
      $guestNum=$row['guestNum'];

        echo '<div class="col-lg-4 col-sm-6 portfolio-item">';
          echo '<div class="card h-100">';
          $id=$row['AptID'];
        echo "<a href='BookApartment.php?AptID=$id&userID=$userID&StartDate=$newStartDate&EndDate=$newEndDate'>";
          $photo=$row['photoName'];
          echo "<img class='card-img-top' src='user_data/$photo' height=300 width=700 alt=''></a>";
            echo '<div class="card-body">';
              echo '<h4 class="card-title">';
              echo "<a href='BookApartment.php?AptID=$id&userID=$userID&StartDate=$newStartDate&EndDate=$newEndDate'>";
                echo '<h4 id="title">'.$title.'</h4></a>';
              echo '</h4>';
              echo '<h5>'.$row["city"].', '.$row["country"].'</h5>';
              echo '<p class="card-text">'.$description.'</p>';
              echo '<p style="font-size:14px; color:#845EC2" class="card-text"><i class="far fa-calendar-alt"></i> &nbsp;'.$newStartDate.' - ' .$newEndDate.'&nbsp;&nbsp;&nbsp; ';
              echo '<span style="font-size:14px; color:#845EC2" class="card-text"><i class="fas fa-users"></i> '.$guestNum.' Guests</span></p>';
            echo'</div>';
          echo'</div>';
        echo'</div>';
        $counter++;
      }

      }
            echo '</div>';
    }

      $conn->close();


?>
      <!-- /.row -->
      <br><br>
      <hr>
      <!-- How does it work Section -->
      <div class="row">
        <div style="line-height: 2.8;"class="col-lg-12">
          <h2>How Does It Work</h2>
          <h4>You are just a few steps away from starting your adventure</h4>
 
        </div>
      </div>


      <div class="row1">
  <div class="column1">
    <div class="card1">
      <p><i class="fa fa-search"></i></p>
      <h3>Find your place</h3>
      <p>find the right apartment for you</p>
    </div>
  </div>

  <div class="column1">
    <div class="card1">
      <p><i class="fa fa-check"></i></p>
      <h3>Book a request</h3>
      <p>so that the host will view your place</p>
    </div>
  </div>
  
  <div class="column1">
    <div class="card1">
      <p><i class="fa fa-clock"></i></p>
      <h3>Wait for it</h3>
      <p>untill you will get an email with the host response</p>
    </div>
  </div>
  
  <div class="column1">
    <div class="card1">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>Happy HomeSwap</h3>
      <p>Go ahead and start packing</p>
    </div>
  </div>
</div>
      <br><br>
      <hr>
      <!-- About Us Section -->
<h2>About Us</h2><br>
  <div class="row" style="margin:0 auto;">
        
  <div class="column col-lg-4" >  
    <div class="card" align="center">
      <img src="css/pics/noga.jpg" alt="Jane" height=250 width=500 style="margin-top:3%;width:90%; padding:2%">
      <div class="container">
        <h3>Noga Gordon-Bar</h3>
        <p class="title">CEO &amp; Founder</p>
        <p>Inforamtion system student in The Academic College of Tel Aviv- Yaffo</p>
        <p><i class="far fa-envelope"></i> Noga.gorbar@gmail.com</p>
        <p><a class="button" href="mailto:Noga.gorbar@gmail.com" style="text-decoration: none;">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column col-lg-4" >
    <div class="card" align="center">
      <img src="css/pics/shir.jpg" height=250 width=500  alt="Mike" style="margin-top:3%;width:90%; padding:2%">
      <div class="container">
        <h3>Shir Balmas</h3>
        <p class="title">CEO &amp; Founder</p>
        <p>Inforamtion system student in The Academic College of Tel Aviv- Yaffo</p>
        <p><i class="far fa-envelope"></i> shirb27@gmail.com</p>
        <p><a class="button" href="mailto:shirb27@gmail.com" style="text-decoration: none;">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column col-lg-4" >
    <div class="card" align="center">
      <img src="css/pics/ziv.jpeg" height=250 width=500 alt="John" style="margin-top:3%;width:90%; padding:2%">
      <div class="container">
        <h3>Ziv Cohen</h3>
        <p class="title">CEO &amp; Founder</p>
        <p>Inforamtion system student in The Academic College of Tel Aviv- Yaffo</p>
        <p><i class="far fa-envelope"></i> ziv0508235213@gmail.com</p>
        <p><a class="button" href="mailto:ziv0508235213@gmail.com" style="text-decoration: none;">Contact</a></p>
      </div>
    </div>
  </div>
</div>

      <br><br>
      <hr>
      <!-- Contact Us Section -->
      <div id="contactUs" style="background-color: #B0A8B9; color: #ffffff; padding:20px; margin-bottom:50px;">
      <div class="row">
        <div class="col-lg-6 mb-4">
          <h3>Contact Us</h3>
          <form name="sentMessage" id="contactForm" action="mailto:info@homeSwap.com" method="post" enctype="text/plain">
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name ="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>

            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div align="center"  id="success">
            <!-- For success/fail messages -->
            <button type="submit" style="width:100%; background-color: #4D8076; border:#4D8076" class="btn btn-info" id="sendMessageButton">Send Message</button></div>
          </form>
        </div>
        <br><br>
        <div class="col-lg-6 mb-4">
            <div id="googleMap" style="width:100%;height:550px;"></div>
            

        </div>

      </div>
    </div>
    </div>
    <!-- /.container -->

  </div>
  <!-- /.row -->

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
  
              <script>
            function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(32.0630759,34.7716202),
                zoom:13,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
            </script>
            
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0fBrP7YMy80tJRSNNhESchun13NgFZ80&callback=myMap"></script>

</body>

</html>
