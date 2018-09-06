<?php

$userID=$_REQUEST['userID'];


$servername="localhost";
$username="root";
$password="";
$dbname="database";

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
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

      <link href="datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">    
      <script src="datepicker/JQuery.js" type="text/javascript"></script>  
      <script ף src="datepicker/dist/js/datepicker.min.js"></script>    
      <script src="datepicker/dist/js/i18n/datepicker.en.js"></script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">


      <title>HomeSwap - Book Apartment</title>

    <style>
      * {
      box-sizing: border-box;
    }

    a{
      text-decoration: none !important
    }
    .carousel-control-next-icon{
      background-image: url("css/pics/NextArrow.png");
      background-color: gray;
    }

    .carousel-control-prev-icon{
      background-image: url("css/pics/PrevArrow.png");
      background-color: gray;
    }

    .searchBtnGoogle{
      color: gray;
    }

    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    .card {
      padding: 10px;
    }
    .checked {
      color: orange;
  }
  .heading {
      font-size: 25px;
      margin-right: 25px;
  }
  .fa {
      font-size: 20px;
  }
  /* Three column layout */
  .side {
      float: left;
      width: 15%;
      margin-top:10px;
      padding-left: 8px;
  }
  .middle {
      margin-top:10px;
      float: left;
      width: 65%;
  }
  .right {
      text-align: right;
      padding-left:10%;
  }
  .row:after {
      content: "";
      display: table;
      clear: both;
  }
  .bar-container {
      width: 100%;
      background-color: #f1f1f1;
      text-align: center;
      color: white;
  }
  #btnFacebook{
    color:#ffffff !important;
  }

  .bar-5 {width: 80%; height: 18px; background-color: #4CAF50;}
  .bar-4 {width: 40%; height: 18px; background-color: #2196F3;}
  .bar-3 {width: 15%; height: 18px; background-color: #00bcd4;}
  .bar-2 {width: 7%; height: 18px; background-color: #ff9800;}
  .bar-1 {width: 30%; height: 18px; background-color: #f44336;}

        #map {
          height: 100%;
        }

        .controls {
          background-color: #fff;
          border-radius: 2px;
          border: 1px solid transparent;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
          box-sizing: border-box;
          font-family: Roboto;
          font-size: 15px;
          font-weight: 300;
          height: 29px;
          margin-left: 17px;
          margin-top: 10px;
          outline: none;
          padding: 0 11px 0 13px;
          text-overflow: ellipsis;
          width: 400px;
        }

        .controls:focus {
          border-color: #4d90fe;
        }
        .title {
          font-weight: bold;
        }
        #infowindow-content {
          display: none;
        }
        #map #infowindow-content {
          display: inline;
        }

  @media (max-width: 300px) {
      .side, .middle {
          width: 100%;
      }
      .right {
          display: none;
      }
  }
  a{
    text-decoration: none;
  }

  .progress {
height: 20px;
margin-bottom: 20px;
overflow: hidden;
background-color: #f5f5f5;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}
.progress {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#ebebeb),to(#f5f5f5));
background-image: -webkit-linear-gradient(top,#ebebeb 0,#f5f5f5 100%);
background-image: -moz-linear-gradient(top,#ebebeb 0,#f5f5f5 100%);
background-image: linear-gradient(to bottom,#ebebeb 0,#f5f5f5 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffebebeb',endColorstr='#fff5f5f5',GradientType=0);
}
.progress {
height: 12px;
background-color: #ebeef1;
background-image: none;
box-shadow: none;
}
.progress-bar {
float: left;
width: 0;
height: 100%;
font-size: 12px;
line-height: 20px;
color: #fff;
text-align: center;
background-color: #428bca;
-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
-webkit-transition: width .6s ease;
transition: width .6s ease;
}
.progress-bar {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#428bca),to(#3071a9));
background-image: -webkit-linear-gradient(top,#428bca 0,#3071a9 100%);
background-image: -moz-linear-gradient(top,#428bca 0,#3071a9 100%);
background-image: linear-gradient(to bottom,#428bca 0,#3071a9 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff428bca',endColorstr='#ff3071a9',GradientType=0);
}
.progress-bar {
box-shadow: none;
border-radius: 3px;
background-color: #0090D9;
background-image: none;
-webkit-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-moz-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-ms-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-o-transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
transition: all 1000ms cubic-bezier(0.785, 0.135, 0.150, 0.860);
-webkit-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
-moz-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
-ms-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
-o-transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
transition-timing-function: cubic-bezier(0.785, 0.135, 0.150, 0.860);
}
.progress-bar-success {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#5cb85c),to(#449d44));
background-image: -webkit-linear-gradient(top,#5cb85c 0,#449d44 100%);
background-image: -moz-linear-gradient(top,#5cb85c 0,#449d44 100%);
background-image: linear-gradient(to bottom,#5cb85c 0,#449d44 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c',endColorstr='#ff449d44',GradientType=0);
}
.progress-bar-success {
background-color: #0AA699;
background-image: none;
}
.progress-bar-info {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#5bc0de),to(#31b0d5));
background-image: -webkit-linear-gradient(top,#5bc0de 0,#31b0d5 100%);
background-image: -moz-linear-gradient(top,#5bc0de 0,#31b0d5 100%);
background-image: linear-gradient(to bottom,#5bc0de 0,#31b0d5 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de',endColorstr='#ff31b0d5',GradientType=0);
}
.progress-bar-info {
background-color: #0090D9;
background-image: none;
}
.progress-bar-warning {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#f0ad4e),to(#ec971f));
background-image: -webkit-linear-gradient(top,#f0ad4e 0,#ec971f 100%);
background-image: -moz-linear-gradient(top,#f0ad4e 0,#ec971f 100%);
background-image: linear-gradient(to bottom,#f0ad4e 0,#ec971f 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e',endColorstr='#ffec971f',GradientType=0);
}
.progress-bar-warning {
background-color: #FDD01C;
background-image: none;
}
.progress-bar-danger {
background-image: -webkit-gradient(linear,left 0,left 100%,from(#d9534f),to(#c9302c));
background-image: -webkit-linear-gradient(top,#d9534f 0,#c9302c 100%);
background-image: -moz-linear-gradient(top,#d9534f 0,#c9302c 100%);
background-image: linear-gradient(to bottom,#d9534f 0,#c9302c 100%);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f',endColorstr='#ffc9302c',GradientType=0);
}
.progress-bar-danger {
background-color: #F35958;
background-image: none;
}

    </style>



    </head>

    <body onload="processUser()">

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

      <!-- Page Content -->
      <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Book an Apartment </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active">Book an Apartment</li>
        </ol>

        <hr>

  <?php
    // ini_set('display_errors',0);
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="database";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if ($conn->connect_error)
  {
    die("connection failed: ".$conn->connect_error);
  }

  $AptID = $_REQUEST["AptID"];
  $userID=$_REQUEST["userID"];
  $newStartDate=$_REQUEST["StartDate"];
  $newEndDate=$_REQUEST["EndDate"];
  $RequesterAptID=$_REQUEST["RequesterAptID"];
  $RequesterID=$_REQUEST["RequesterID"];


$tempStartdate = str_replace('/', '-', $newStartDate);
$tempEnddate = str_replace('/', '-', $newEndDate);

  $StartDate = date('Y-m-d', strtotime($tempStartdate));
  $EndDate = date('Y-m-d', strtotime($tempEnddate));



  $sql = "SELECT apartments.AptID, apartments.country,apartments.city,apartments.street, apartments.title, apartments.description,apartments.guestNum, apartments.propertyType,apartments.propertyStyle ,apartments.amenities, apartments.accessibility ,apartments.rules, apt_photos.photoName, users.Fname, users.Lname, users.email, users.phone, users.usersCountry, users.usersCity FROM apartments
  INNER JOIN apt_photos ON apartments.AptID=apt_photos.AptID
  INNER JOIN users ON apartments.userID=users.userID
  WHERE apartments.AptID='$RequesterAptID'
";
  
  $result=$conn->query($sql);
  $arrPhoto=array();
  $arrAptStyle=array();
  $arrAmenities=array();
  $arrAptRules=array();
  $arrAccess=array();
  $i=0;
  if($result->num_rows>0){
    while ($row=$result->fetch_assoc())
    {
      $photo=$row['photoName'];
      $arrPhoto[$i]=$photo;
      $i++;



      // echo "<img class='img-fluid rounded mb-3 mb-md-0' src='user_data/$photo'/>";
      $title=($row['title']);
      $country=($row['country']);
      $city=($row['city']);
      $street=($row['street']);
      $description=($row['description']);
      $guestNum=$row['guestNum'];
      $propertyType=$row['propertyType'];
      $propertyStyle=$row['propertyStyle'];
      $accessibility=$row['accessibility'];
      $amenities = $row['amenities'];
      $rules = $row['rules'];

      $fname=$row['Fname'];
      $lname=$row['Lname'];
      $email=$row['email'];
      $phone=$row['phone'];
      $userCountry=$row['usersCountry'];
      $userCity=$row['usersCity'];




    }
 

  }

  $arrAptStyle= explode(',', $propertyStyle);
  foreach ($arrAptStyle as $key=>$styleItem) {
    if ($styleItem == 'urban'){
      $arrAptStyle[$key]='Urban';
    }
    if ($styleItem == 'openSpace'){
      $arrAptStyle[$key]='Open-Space';
    }
    if ($styleItem == 'seaView'){
      $arrAptStyle[$key]='Sea-View';
    }
    if ($styleItem == 'countryHouse'){
      $arrAptStyle[$key]='Country-House';
    }
    if ($styleItem == 'forFamilies'){
     $arrAptStyle[$key]='For-Families';
    }
  }
  
    $arrAptRules= explode(',', $rules);
  foreach ($arrAptRules as $key=>$rule) {
    if ($rule == 'smoking_allowed'){
      $arrAptRules[$key]='Smoking Allowed';
    }
    if ($rule == 'pets_allowed'){
      $arrAptRules[$key]='Pets Allowed';
    }
    if ($rule == 'suitable_for_events'){
      $arrAptRules[$key]='Suitable For Events';
    }
  }

      $arrAccess= explode(',', $accessibility);
  foreach ($arrAccess as $key=>$accessItem) {
    if ($accessItem == 'accesible_parking'){
      $arrAccess[$key]='Accesible Parking';
    }
    if ($accessItem == 'wide_corridor'){
      $arrAccess[$key]='Wide Corridor';
    }
    if ($accessItem == 'staircase_free'){
      $arrAccess[$key]='Staircase Free';
    }
        if ($accessItem == 'elivator'){
      $arrAccess[$key]='Elivator';
    }
  }

  $arrAmenities =explode(',', $amenities);
    foreach ($arrAmenities as $key=>$amenItem) {
    if ($amenItem == 'WIFI'){
      $arrAmenities[$key]="<i class='fas fa-wifi'></i> WIFI";
    }
    if ($amenItem == 'parking'){
      $arrAmenities[$key]="<i class='fas fa-parking'></i> Parking";
    }
    if ($amenItem == 'balcony'){
      $arrAmenities[$key]="<i class='fas fa-chess-rook'></i> Balcony";
    }
        if ($amenItem == 'pool'){
      $arrAmenities[$key]="<i class='fas fa-swimming-pool'></i> Pool";
    }
    if ($amenItem == 'hot_tub'){
      $arrAmenities[$key]="<i class='fas fa-hot-tub'></i> Hot-Tub";
    }
    if ($amenItem == 'safe'){
      $arrAmenities[$key]="<i class='fas fa-key'></i> Safe";
    }
    if ($amenItem == 'kitchen'){
      $arrAmenities[$key]="|<i class='fas fa-utensils'></i> Kitchen";
    }
        if ($amenItem == 'workspace'){
      $arrAmenities[$key]="<i class='fas fa-briefcase'></i> Work-space";
    }
        if ($amenItem == 'TV'){
      $arrAmenities[$key]="<i class='fas fa-tv'></i> TV";
    }
    if ($amenItem == 'iron'){
      $arrAmenities[$key]="<i class='fas fa-tshirt'></i> Iron";
    }
    if ($amenItem == 'gym'){
      $arrAmenities[$key]="<i class='fas fa-dumbbell'></i> Gym";
    }
        if ($amenItem == 'fire_place'){
      $arrAmenities[$key]="<i class='fas fa-fire'></i> Fire-Place";
    }
    if ($amenItem == 'washing_machine'){
      $arrAmenities[$key]="<i class='fas fa-tint'></i> Washing-Machine";
    }
        if ($amenItem == 'air_conditioner'){
      $arrAmenities[$key]="<i class='fas fa-snowflake'></i> Air-Conditioner";
    }

  }



  $address= $country.' '.$city.' '.$street.' ' ;

  $photo1=$arrPhoto[0];
  // $photo2=$arrPhoto[1];
  // $photo3=$arrPhoto[2];

          echo "<div class='row'>";
         echo  "<div class='col-lg-8 col-sm-12 portfolio-item'>";
        echo  "<div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>";
        echo "<ol class='carousel-indicators'>";
         foreach ($arrPhoto as $key=>$item){
          if ($key==0){
        echo "<li data-target='#carouselExampleIndicators' data-slide-to='$key' class='active'>";
        echo "</li>";
      }
      else{
        echo "<li data-target='#carouselExampleIndicators' data-slide-to='$key'>";
        echo "</li>";
      }
      }
        echo "</ol>";
        echo "<div class='carousel-inner'>";
        
        foreach ($arrPhoto as $key=>$item){
          if ($key==0){
            echo "<div class='carousel-item active'>";
        echo "<img class='d-block w-100' src='user_data/$item' alt='Picture 1'>";
        echo "</div>";

          }
          else{
            echo "<div class='carousel-item'>";
        echo "<img class='d-block w-100' src='user_data/$item' alt='Picture 2'>";
        echo "</div>";
          }
        
      }
        // echo "<div class='carousel-item'>";
        //   echo "<img class='d-block w-100' src='user_data/$photo2' alt='Picture 3'>";
        //   echo "</div>";
          echo "</div>";
            echo "</div>";
            echo "</div>";
      // echo ($title);
      // echo ($country);
      // echo ($row['city']);

        // print_r($arrAptStyle);


   


  ?>
<form id='frmsbmt' method='post' action='#'>
        <input type=hidden id="id" name="id">

 </form>
 <!--         <div id="id"></div>



 -->        <!-- Content Row -->
<!--       <div class="row">-->          


          <div class="col-lg-4 col-sm-12 portfolio-item">
            

            <!-- ******Google Maps API ********* -->
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0fBrP7YMy80tJRSNNhESchun13NgFZ80&callback=initMap">
            </script>

            <script>
              function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {zoom: 14});
                var geocoder = new google.maps.Geocoder;
                geocoder.geocode({'address': '<?php echo $address ?>'}, function(results, status) {
                  if (status === 'OK') {
                    map.setCenter(results[0].geometry.location);
                    new google.maps.Marker({
                      map: map,
                      position: results[0].geometry.location
                    });
                  } else {
                    window.alert('Geocode was not successful for the following reason: ' +
                        status);
                  }
                });
              }
            </script>

            <div id="map"></div>
            <!-- ******End of Google Maps API ********* -->          
          </div>
    </div>
        <!-- /Row -->

      <div class="row">
            <div class="col-lg-7 col-sm-12 portfolio-item">
                <div class="card">
                    <div class="bg-light text-dark" style="height:350px; line-height: 1.7; padding:2%">
                      <h4><?php echo $title ?></h4>
                      <h5><?php echo $city?>, <?php echo $country ?></h5>
                       <h6><i class="fas fa-users">  </i> <?php echo $guestNum ?> Guests &nbsp;   
                    <i class="fas fa-home">  </i>   <?php echo $propertyType ?> 
                    &nbsp; <i class="far fa-calendar-alt"></i> <?php echo $newStartDate.'-'.$newEndDate.'' ?>

                  </h6>
                      <p> <?php echo $description ?></p>
                    </div>
                  </div>          
            </div>
 <!--          <div class="col-lg-4 col-sm-12 portfolio-item">
                <div class="card">
                    <div class="bg-light text-dark">
                   

                        



                    </div>
                </div>
          </div> -->

          <div class="col-lg-5 col-sm-12 portfolio-item">
              <div class="card">

                  <div class="bg-light text-dark" style="height:350px; line-height: 1.5; padding:2%">

                    <?php 
                      if(!empty($arrAptStyle[0])){

                        echo"<p> <i class='fas fa-umbrella-beach'></i> ";
                      
                        foreach ($arrAptStyle as $style){
                          echo $style;
                          if (next($arrAptStyle)!=null){
                          echo ', '; 
                        } 
                      }
                      echo "</p>";
                    }
                      
                        ?>
                        
                     <?php 
                      if(!empty($arrAptRules[0])){
                          echo "<p> <i class='fas fa-ban'></i> ";

                      foreach ($arrAptRules as $ruleItem){
                        echo $ruleItem;

                        if (next($arrAptRules)!=null){
                        echo ', '; 
                      } 
                    }
                    
                    echo "</p>";
                  }
                  ?>


                  <?php
                      if(!empty($arrAccess[0])){
                    echo "<p> <i class='fas fa-wheelchair'></i> ";

                      foreach ($arrAccess as $accessItem){
                        echo $accessItem;
                        if (next($arrAccess)!=null){
                        echo ', '; 
                      } 
                      }
                      echo "</p>";
                    }
                    ?>

                    <br>


                    <h5>Amenities</h5>
                  <?php
                     $counter=0;

                      if(!empty($arrAmenities[0])){
                        echo "<span>";
                      foreach ($arrAmenities as $ameniItem){
                        $counter++;
                        echo "$ameniItem &nbsp;&nbsp;&nbsp;</span>";
                        if ($counter==4){
                        echo "<br>";
                        $counter=0; 
                      } 
                     
                      }
                    }
                    ?>
                  </div>
                </div>
          </div>

      </div>
      <!-- /Row -->  
        <div class="row">
          <div class="col-lg-7 col-sm-12 portfolio-item">
              <div class="card">

                  <div class="bg-light text-dark" style="padding:2%; line-height: 1.7">
                    <h2 align="center">Apartment Reviews</h2>

                    <div class="row" align="center" >
<!--                         <div class="col-md-4">
 -->                  <br>
                  <div class="col-md-11" align="center" style="padding:10px; padding-left:60px;">
                    <div class="progress" style="height:20px;" align="center">
                      <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100">Location</div>
                    </div>
                    <div class="progress" style="height:20px;">
                      <div data-percentage="0%" style="width: 60%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100">Cleanliness</div>
                    </div>
                    <div class="progress" style="height:20px;">
                      <div data-percentage="0%" style="width: 40%;" class="progress-bar progress-bar-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100">Facilities</div>
                    </div>
                    <div class="progress" style="height:20px;">
                      <div data-percentage="0%" style="width: 80%;" class="progress-bar progress-bar-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100">Value for money</div>
                    </div>
                  </div>
<!--                 </div>
 -->

<!--                       <div class="side">
                        <p>Location</p>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-5"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <p>150</p>
                      </div>
                      <div class="side">
                        <p>Cleanliness</p>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-4"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <p>63</p>
                      </div>
                      <div class="side">
                        <p>Facilities</p>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-3"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <p>15</p>
                      </div>
                      <div class="side">
                        <p>Value</p>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-2"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <p>6</p>
                      </div>
                      <div class="side">
                        <p>Comfort</p>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-1"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <p>20</p>
                      </div> -->
                    </div>
                    <hr>
                    <div align="center">
                    <h6> John Lewis</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p><i>"Me and my wife visited at asaf's apartment. it was  a great experience and we had a wonderful time. much recommended!!" </i></p>
                    <h6> Maria and Migel</h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p><i>" My experience at asaf's place was awesome!! next to all of the bars and restaurants, but still a very quite neighborhood. i can't wait to swap with him again! :) " </i></p>
                    <h6> Leonard Levi </h6>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <p><i>" the apartment is wonderful!! me and my husband stayed at the apartment for 4 days. the apartment was well equipped and comfortable, the neighborhood was quite and nice. it was a bit cold at nights and the air-condition was a bit week, but the overall stay was great! " </i></p>
                  </div>
                  </div>
                </div>          
          </div>

          <div class="col-lg-5 col-sm-12 portfolio-item" >
              <div class="card" align="center">
                  <div class="bg-light text-dark" style=" height:735px;">
                    <h2>Host details</h2>
                    <div align="center" style="height:40%; width:75%;">
                      <img class="card-img-top" src="css/pics/Owner.png" alt="Owner image" style="width:100%; height: 100%;"><br><br>
                      <!-- <div class="card-body" align="center"> -->
                        <h4 class="card-title"><?php echo $lname.', '.$fname.''; ?></h4>
                        <div class="card-text">
                        <p>Email: <?php echo $email.''; ?><br>
                        Phone: <?php echo $phone.''; ?></p>
<!--                         <a href="#" class="btn btn-info">Chat Now!</a>

 -->                    
<!-- </div> -->


                    
<!--                   </div>
                </div>          
          </div> -->

  <!--         <div class="col-lg-4 col-sm-12 portfolio-item">
              <div class="card">
                  <div class="bg-light text-dark"> -->
                    <span class="heading"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p>4.1 average based on 254 reviews</p>
                  </div>

<!--                     <hr style="border:3px solid #f1f1f1">


 -->   
<!--  <a class="btn btn-primary" href="#">Hi</a>
 -->                <div id="btns" style="width:100%">    
                    <p><a href="javascript:document.location.href=getUrlFacebook();" class="btn btn-primary">Find on Facebook</a>

                    <a href="javascript:document.location.href=getUrlGoogle();" class="btn btn-danger">Find on Google</a></p>

                    </div>

                    

                    <p><a href="mailto: '<?php echo $email ?>'" class="btn btn-outline-secondary" style="width:92%" >Send me an Email</a></p>

        </div>
                  </div>          
              </div>
      </div>
    </div>
    <!-- /Row --> 

    
      <form align="center" action="PHP/DecisionOrder.php" method="POST">

        <input name="userID" value="<?php echo $userID?>" hidden/>
        <input name="AptID" value="<?php  echo $AptID?>" hidden />
        <input name="StartDate" value="<?php echo $StartDate?>" hidden/>
        <input name="EndDate" value="<?php  echo $EndDate?>" hidden />
        <input name="RequesterAptID" value="<?php  echo $RequesterAptID?>" hidden />
        <input name="RequesterID" value="<?php  echo $RequesterID?>" hidden />

       


      <div align="center">
    <button type="submit" name="refuse" align="center" class="btn-lg btn-danger" style="height:80px; width: 48%; "><i class="fas fa-times-circle"></i> Refuse Request</button>
    <button type="submit" name="approve" align="center" class= "btn-lg btn-success" style=" height:80px; width: 48%;"><i class="fas fa-check-circle"></i> Approve Request</button>
     </div>
 
      </form>




    </div>
  </div>

  <br><br><br>
      <!-- /.container -->

      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white"> &copy; HomeSwap 2018</p>
        </div>
      </footer>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Contact form JavaScript -->
      <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>
      <script type="text/javascript">
        function processUser()
        {
          var parameters = location.search.substring(1).split("&");
          var temp = parameters[0].split("=");
          id = unescape(temp[1]);
      
          document.getElementById("id").value = id;
          
        }

      </script>


         <script type="text/javascript">
      function getUrlFacebook()
      {
      	var firstName= "<?php echo $fname ?>";
      	var lastName="<?php echo $lname ?>";
        var link ="https://www.facebook.com/search/str/";
        // var firstName = "ziv"; //first name of user
        // var lastName = "cohen" //last name of user
        var newLink = link+firstName+"+"+lastName+"/keywords_search";
        // alert (name);
        return newLink;
        // this code open in new link but the current page shows an error:
        // window.open(newLink, '_blank'); 
      }
      function getUrlGoogle()
      {
        var link ="http://www.google.com/search?q=";
        var firstName= "<?php echo $fname ?>";
      	var lastName="<?php echo $lname ?>";
        // var firstName = "ziv"; //first name of user
        // var lastName = "cohen" //last name of user
        var newLink = link+firstName+"+"+lastName;
        return newLink;
        // this code open in new link but the current page shows an error:
        // window.open(newLink, '_blank'); 
      }


// $(document).ready(function() {
//       function sendRefuseMail(){
//         alert("hi");
//         event.preventDefault();  
//         window.location='PHP/refusedOrder.php';
//       }

//     });

  </script>

    </body>

  </html>
