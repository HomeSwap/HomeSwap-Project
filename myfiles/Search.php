<?php

$userID=$_REQUEST['userID'];

$servername="localhost";
$username="root";
$password="";
$dbname="database";

$sqlUser = "SELECT Fname from users where userID = '$userID'";  

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

$resultUser = mysqli_query($conn,$sqlUser);
$rows = mysqli_fetch_array($resultUser);


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
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>HomeSwap - Search Apartment</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>

@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

#searchBtn{
    background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 10px 30px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 20px;
      margin:10px;
      width: 300px;
    background-image: linear-gradient(to right, #3596b5, #1b8ec2, #3182cc, #5b73cd, #845ec2);
    }

#custom-search-input {
    margin:0 auto;
    margin-top: 20px;
    padding: 3px;
    width: 100%;
    text-align:center;

}
 
#custom-search-input .search-query {
    width:100%;
    padding-right: 3px;
    padding-left: 15px;
    margin-bottom: 0;
    -webkit-border-radius: 5px;
    -moz-border-radius: 3px;
    border-radius: 15px;
    text-align:center;
    height:50px;
}
 
#custom-search-input button {
    border: 0;
    background: none;
/*    padding: 2px 5px;
*/    margin-top: 2px;
    position: absolute;
    right:25px;
    top:8px;
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: unset;
    z-index: 2;
        margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}
button{
	background-color: #ffffff;
}
 
.search-query:focus{
    z-index: 0; }

    #dropdownMenuButton {
      margin: 6px;
    }
 .dropdown{
 	display: inline;
 }

 #amen { 
 	overflow: auto;
    width: 110px;
    height: 150px;
 }

</style>
</head>

  <body onload="colorFields()">
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


<div class="container">
<!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Search Apartment</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href='indexUser.php?userID=<?php echo $userID ?>'>Home</a>
        </li>
        <li class="breadcrumb-item active">Search</li>
      </ol>


<form action="PHP/searchRes.php?userID=<?php echo $userID ?>" method="POST">
    <!-- Search box -->
  <div class="row">
      <div class="col-12">
          <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="search-query form-control input-lg"  name="dest" placeholder="Where do you want to go?"/>
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button" type="button">
                            <span><i class="fas fa-map-marker"></i></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
  </div>
<br> 

    <!-- Search buttons -->
  <div class="row" align="center">
	  <div class="col-lg-12 col-sm-6">

	  	<div class="btn-group">
    <button id="dates" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="glyphicon glyphicon-plus-sign"></i> <span id="datesSpan" class="caret">Dates</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li> <label ><b>Start date</b></label><input type="date" id="sd" name="StartDate" max="3000-12-31" min="1000-01-01" class="form-control"></li>
      <li><label ><b>End date</b></label><input type="date" id="ed" name="EndDate" min="1000-01-01" max="3000-12-31" class="form-control"></li>
    </ul>
  </div>

   <div class="btn-group">
    <button id="qty_input1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="glyphicon glyphicon-plus-sign"></i> <span id="guest"class="caret">Guests</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li> <input type="number" id="qty_input" name="qty_input" class="form-control form-control-sm" value="2" min="1"></li>  
    </ul>
  </div>

    <div class="btn-group">
    <button id="propertyType" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="glyphicon glyphicon-plus-sign"></i> <span class="caret">Home type</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><label><input type="radio" id="apartment" value="Apartment" name="propertyType">Apartment</label></li>
      <li><label><input type="radio" id="villa" value="Villa" name="propertyType">Villa</label></li>      
      <li><label><input type="radio" id="condominium" value="Condominium" name="propertyType" >Condominium</label></li>
      <li><label><input type="radio" id="loft" value="Loft" name="propertyType" >Loft</label></li>      
    </ul>
  </div>


      <div class="btn-group">
    <button id="propertyStyle" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="glyphicon glyphicon-plus-sign"></i> <span class="caret">Trip type</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="propertyStyle[]" value="seaView" id="seaView"><label class="form-check-label" for="sea_view">Sea view</label></div></li>
        <li><div class="form-check"><input class="form-check-input" type="checkbox" name="propertyStyle[]" value="urban" id="urban"><label class="form-check-label" for="urban">Urban</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="propertyStyle[]" value="countryHouse" id="countryHouse"><label class="form-check-label" for="country_house">Country house</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="propertyStyle[]"value="openSpace" id="openSpace"><label class="form-check-label" for="open_space">Open space</label></div></li>     
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="propertyStyle[]" value="forFamilies" id="forFamilies"><label class="form-check-label" for="for_families">For families</label></div></li>                   
    </ul>
  </div>

      <div class="btn-group">
    <button id="amenities" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="glyphicon glyphicon-plus-sign"></i> <span class="caret">Amenities</span>
    </button>
    <ul class="dropdown-menu" role="menu" id="amen">
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" id="WIFI" value="WIFI" ><label class="form-check-label" for="WIFI">WIFI</label></div></li> 
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="hot_tub" id="hot_tub"><label class="form-check-label" for="hot_tub">Hot-tub</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="parking" id="parking"><label class="form-check-label" for="parking">Parking</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="balcony" id="balcony"><label class="form-check-label" for="balcony">Balcony</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="pool" id="pool"><label class="form-check-label" for="pool">Pool</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="safe" id="safe"><label class="form-check-label" for="safe">Safe</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="kitchen" id="kitchen"><label class="form-check-label" for="kitchen">Kitchen</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="workspace" id="workspace"><label class="form-check-label" for="workspace">Workspace</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="TV" id="TV"><label class="form-check-label" for="TV">TV</label></div></li>    
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="iron" id="iron"><label class="form-check-label" for="iron">Iron</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="gym" id="gym"><label class="form-check-label" for="gym">Gym</label></div></li>  
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="fire_place" id="fire_place"><label class="form-check-label" for="fire_place">Fire place</label></div></li>      
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="washing_machine" id="washing_machine"><label class="form-check-label" for="washing_machine">Washing Machine</label></div></li>     
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="amenities[]" value="air_conditioner" id="air_conditioner"><label class="form-check-label" for="air_conditioner">Air Conditioner</label></div></li>                         
    </ul>
  </div>

       <div class="btn-group">
    <button id="accessibility" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="glyphicon glyphicon-plus-sign"></i> <span class="caret">Accessibility</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="accessibility[]" value="wide_corridor" id="wide_corridor"><label class="form-check-label" for="wide_corridor">Wide corridor</label></div></li>
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="accessibility[]" value="staircase_free" id="staircase_free"><label class="form-check-label" for="staircase_free">Staircase free</label></div></li>      
       <li><div class="form-check"><input class="form-check-input" type="checkbox" name="accessibility[]" value="elivator" id="elivator"><label class="form-check-label" for="elivator">Elivator</label></div></li>      
       <li><div class="form-check"><input class="form-check-input" type="checkbox" name="accessibility[]" value="accesible_parking" id="accesible_parking"><label class="form-check-label" for="accesible_parking">Accesible parking</label></div></li>                       
    </ul>
  </div> 


       <div class="btn-group">
    <button id="rules" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="glyphicon glyphicon-plus-sign"></i> <span class="caret">Special Requests</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><div class="form-check"><input class="form-check-input" type="checkbox" name="rules[]" value="smoking_allowed" id="smoking_allowed"><label class="form-check-label" for="smoking_allowed">Smoking allowed</label></div></li>
       <li><div class="form-check"><input class="form-check-input" type="checkbox" name="rules[]" value="pets_allowed" id="pets_allowed"><label class="form-check-label" for="pets_allowed">Pets allowed</label></div></li>    
       <li><div class="form-check"><input class="form-check-input" type="checkbox" name="rules[]" value="suitable_for_events" id="suitable_for_events"><label class="form-check-label" for="suitable_for_events">Suitable for events</label></div></li>          
                      
    </ul>
  </div>

 <!--  <div><button class="btn-default btn-lg">Search</button></div> -->


  <div>
    <button id="searchBtn" style=" font-size: 22px;"> <i class="fas fa-search"></i> Search</button>
  </div>



		</div>
<!-- /row -->
      <br>
      <br>
      <br>
            <br>
      <br>
      <br>




      <h2>Explore available apartments</h2>
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

  $counter=0;


$sqlApart="SELECT apt_availability.StartDate, apt_availability.EndDate, apt_photos.photoName, apartments.title, apartments.description, apartments.AptID, apartments.guestNum FROM apartments 
  INNER JOIN apt_availability ON apartments.AptID=apt_availability.AptID
  INNER JOIN apt_photos ON apartments.AptID=apt_photos.AptID
  GROUP BY apartments.AptID
";

$result1=$conn->query($sqlApart);

  if($result1->num_rows>0){
      echo '<div class="row">';
    while ($row=$result1->fetch_assoc()) 
    {
      if ($counter<6){
      // echo "<h3>".$row["title"]."</h3>";
      // echo "<tr><td>".$row["AptID"]."</td><td>".$row["country"]."</td><td>".$row["city"]."</td><td>".$row["title"]."</td></tr>";

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
                echo '<h4>'.$title.'</h4>';
              echo '</h4>';
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
            $conn->close();
    }

    ?>
<!-- /row -->
<br><br>
</div>

</form>
</div>
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
<script type="text/javascript">
  
</script>


<script type="text/javascript">

  function colorFields(){
    var qty_input= document.getElementById("qty_input").value;
    document.getElementById("qty_input1").style.color='#845EC2';
    document.getElementById("guest").innerHTML=qty_input + ' Guests';
  }




$(document).ready(function(){


    $("input").change(function color(){

    var qty_input= document.getElementById("qty_input").value;
    document.getElementById("guest").innerHTML=qty_input + ' Guests';



    var sd= document.getElementById("sd").value;
    var ed= document.getElementById("ed").value;
    
    if ((sd!="" )||(ed!="")){
      document.getElementById("dates").style.color='#845EC2';

      if (sd!="" && ed==""){
        document.getElementById("datesSpan").innerHTML='Starts: '+ sd;
        document.getElementById("dates").style.color='#845EC2';
      }
      if (ed!="" && sd==""){
        document.getElementById("datesSpan").innerHTML='Ends: '+ ed;
        document.getElementById("dates").style.color='#845EC2';
      }

      if (((sd!="" )&&(ed!=""))) {
         document.getElementById("datesSpan").innerHTML= sd+ ' - ' + ed;
         document.getElementById("dates").style.color='#845EC2';
      }

    }




    var counter1=0;
    var counter2=0;
    var counter3=0;
    var counter4=0;




    var rules = document.getElementsByName('rules[]');
    for(var i = 0; i < rules.length; ++i)
    {
        if(rules[i].checked) {
          document.getElementById("rules").style.color='#845EC2';
          counter1++;
        } 
    }
        var amenities = document.getElementsByName('amenities[]');
    for(var i = 0; i < amenities.length; ++i)
    {
        if(amenities[i].checked) {
          document.getElementById("amenities").style.color='#845EC2';
          counter2++;
        } 
    }
        var accessibility = document.getElementsByName('accessibility[]');
    for(var i = 0; i < accessibility.length; ++i)
    {
        if(accessibility[i].checked) {
          document.getElementById("accessibility").style.color='#845EC2';
          counter3++;
        } 
    }
        var propertyStyle = document.getElementsByName('propertyStyle[]');
    for(var i = 0; i < propertyStyle.length; ++i)
    {
        if(propertyStyle[i].checked) {
          document.getElementById("propertyStyle").style.color='#845EC2';
          counter4++;
        } 
    }

            var propertyType = document.getElementsByName('propertyType');
    for(var i = 0; i < propertyType.length; ++i)
    {
        if(propertyType[i].checked) {
          document.getElementById("propertyType").style.color='#845EC2';
        } 
    }
    
    if (counter1==0){
       document.getElementById("rules").style.color='black';

    }
        if (counter2==0){
       document.getElementById("amenities").style.color='black';

    }
           if (counter3==0){
       document.getElementById("accessibility").style.color='black';

    }
           if (counter4==0){
       document.getElementById("propertyStyle").style.color='black';

    }
       if(sd==""&&ed==""){
      document.getElementById("datesSpan").style.color='black';
      document.getElementById("datesSpan").innerHTML='Dates';
    }
    
        
    });

});







  // alert(document.getElementById("qty_input").value);
 // alert(document.getElementById("sd").value);




</script>
  </body>

</html>
