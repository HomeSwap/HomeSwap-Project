

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
      padding-left: 12px;
  }
  .middle {
      margin-top:10px;
      float: left;
      width: 65%;
  }
  .right {
      text-align: right;
  }
  .row:after {
      content: "";
      display: table;
      clear: both;
  }
  .bar-container {
      width: 80%;
      background-color: #f1f1f1;
      text-align: center;
      color: white;
  }

  .bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
  .bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
  .bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
  .bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
  .bar-1 {width: 15%; height: 18px; background-color: #f44336;}

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

    </style>

   <script type="text/javascript">
      function getUrlFacebook()
      {
        var link ="https://www.facebook.com/search/str/";
        var firstName = "ziv"; //first name of user
        var lastName = "cohen" //last name of user
        var newLink = link+firstName+"+"+lastName+"/keywords_search";
        return newLink;
        // this code open in new link but the current page shows an error:
        // window.open(newLink, '_blank'); 
      }
      function getUrlGoogle()
      {
        var link ="http://www.google.com/search?q=";
        var firstName = "ziv"; //first name of user
        var lastName = "cohen" //last name of user
        var newLink = link+firstName+"+"+lastName;
        return newLink;
        // this code open in new link but the current page shows an error:
        // window.open(newLink, '_blank'); 
      }

  </script>

    </head>

    <body onload="processUser()">

      <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">HomeSwap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="Registration.html">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newApartment.html">New apartment</a>
            </li>          
            <li class="nav-item">
              <a class="nav-link" href="Search.html">search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="SearchResults.html">search Results</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="BookApartment.html">book Apartment</a>
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

  $id = $_REQUEST["AptID"];

  $sql = "SELECT apartments.AptID, apartments.country,apartments.city,apartments.street, apartments.title, apartments.description,apartments.guestNum, apartments.propertyType,apartments.propertyStyle ,apartments.amenities, apartments.accessibility ,apartments.rules, apt_photos.photoName FROM apartments
  INNER JOIN apt_photos ON apartments.AptID=apt_photos.AptID
  WHERE apartments.AptID='$id';
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
         echo  "<div class='col-lg-6 col-sm-12 portfolio-item'>";
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


          <div class="col-lg-6 col-sm-12 portfolio-item">
            

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
            <div class="col-lg-4 col-sm-12 portfolio-item">
                <div class="card">
                    <div class="bg-light text-dark">
                      <h4><?php echo $title ?></h4>
                      <h5><?php echo $city?>, <?php echo $country ?></h5>
                      <h6> <?php echo $description ?></h6>
                    </div>
                  </div>          
            </div>
          <div class="col-lg-4 col-sm-12 portfolio-item">
                <div class="card">
                    <div class="bg-light text-dark">
                    <h6><i class="fas fa-users"></i> <?php echo $guestNum ?> Guests </h6>
                    <h6><i class="fas fa-home"></i> <?php echo $propertyType ?> </h6>
                      <?php 
                      if(!empty($arrAptStyle[0])){

                        echo"<h6> <i class='fas fa-umbrella-beach'></i> ";
                      
                        foreach ($arrAptStyle as $style){
                          echo $style;
                          if (next($arrAptStyle)!=null){
                          echo ', '; 
                        } 
                      }
                      echo "</h6>";
                    }
                      
                        ?>
                        
                     <?php 
                      if(!empty($arrAptRules[0])){
                          echo "<h6> <i class='fas fa-ban></i> ";

                      foreach ($arrAptRules as $ruleItem){
                        echo $ruleItem;
                        if (next($arrAptRules)!=null){
                        echo ', '; 
                      } 
                    }
                    
                    echo "</h6>";
                  }
                  ?>

                  <?php
                      if(!empty($arrAccess[0])){
                    echo "<h6> <i class='fas fa-wheelchair'></i> " ;
                      foreach ($arrAccess as $accessItem){
                        echo $accessItem;
                        if (next($arrAccess)!=null){
                        echo ', '; 
                      } 
                      }
                      echo "</h6>";
                    }
                    ?>
                        



                    </div>
                </div>
          </div>

          <div class="col-lg-4 col-sm-12 portfolio-item">
              <div class="card">
                  <div class="bg-light text-dark"><h5>Amenities</h5>
                  <?php
                      if(!empty($arrAmenities[0])){
                    // echo "<h6> <i class='fas fa-wheelchair'></i>" ;
                      foreach ($arrAmenities as $ameniItem){
                        echo $ameniItem;
                        if (next($arrAmenities)!=null){
                        echo '<br>'; 
                      } 
                      }
                      echo "</h6>";
                    }
                    ?>
                  </div>
                </div>
          </div>

      </div>
      <!-- /Row -->  
        <div class="row">
          <div class="col-lg-4 col-sm-12 portfolio-item">
              <div class="card">

                  <div class="bg-light text-dark">
                    <h4>Apartment Reviews</h4>

                   <hr style="border:3px solid #f1f1f1">
                    <div class="row">
                      <div class="side">
                        <div>Location</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-5"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>150</div>
                      </div>
                      <div class="side">
                        <div>Cleanliness</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-4"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>63</div>
                      </div>
                      <div class="side">
                        <div>Facilities</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-3"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>15</div>
                      </div>
                      <div class="side">
                        <div>Value for money</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-2"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>6</div>
                      </div>
                      <div class="side">
                        <div>Comfort</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-1"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>20</div>
                      </div>
                    </div>
                    <h6> John Lewis 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span></h6>
                    <h6>" description description description description description description description description description description description description description description description description description description description description description description description description " </h6><br>
                    <h6> Maria Carey 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span></h6>
                    <h6>" description description description description description description description description description description description description description description description description description description description description description description description description " </h6><br>
                    <h6> Leonard Cohen 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span></h6>
                    <h6>" description description description description description description description description description description description description description description description description description description description description description description description description " </h6>
                  </div>
                </div>          
          </div>

          <div class="col-lg-4 col-sm-12 portfolio-item">
              <div class="card">
                  <div class="bg-light text-dark">
                    <h2>Owner/Host details</h2>
                    <div class="card" style="width:300px">
                      <img class="card-img-top" src="css/pics/Owner.png" alt="Owner image" style="width:100%; height: 100%;">
                      <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an owner of apartment</p>
                        <a href="#" class="btn btn-info">Chat Now!</a>
                      </div>
                    </div>
                  </div>
                </div>          
          </div>

          <div class="col-lg-4 col-sm-12 portfolio-item">
              <div class="card">
                  <div class="bg-light text-dark">
                    <span class="heading">Owner Reviews</span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p>4.1 average based on 254 reviews.</p>
                    <hr style="border:3px solid #f1f1f1">
                    <div class="row">
                      <div class="side">
                        <div>Location</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-5"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>150</div>
                      </div>
                      <div class="side">
                        <div>Cleanliness</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-4"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>63</div>
                      </div>
                      <div class="side">
                        <div>Facilities</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-3"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>15</div>
                      </div>
                      <div class="side">
                        <div>Value for money</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-2"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>6</div>
                      </div>
                      <div class="side">
                        <div>Comfort</div>
                      </div>
                      <div class="middle">
                        <div class="bar-container">
                          <div class="bar-1"></div>
                        </div>
                      </div>
                      <div class="side right">
                        <div>20</div>
                      </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-outline-primary"> <a href="javascript:document.location.href=getUrlFacebook();">Find on Facebook</a></button>

                    <button type="button" class="btn btn-outline-secondary"> <a href="javascript:document.location.href=getUrlGoogle();"><span class ="searchBtnGoogle">Find on Google</span></a></button><br><br>

                    <button type="button" class="btn btn-outline-success btn-block">Send an Email</button>
                  </div>          
              </div>
      </div>
    </div>
    <!-- /Row --> 
      <form>
      <button type="submit" class="btn btn-success btn-block" id="sendRequestButton"><h3>Request To Book</h3></button>
         <h5 class="text-center">*Note: final confirmation of the order will be received by e-mail after confirmation of the apartment owner </h5>   
      </form>
    </div>
  </div>
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

    </body>

  </html>
