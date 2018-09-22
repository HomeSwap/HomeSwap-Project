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
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>HomeSwap - Search Apartment</title>

    <!-- Bootstrap core CSS -->
    <link href="..\css/bootstrap.css" rel="stylesheet">

    <link href="..\css/modern-business.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>

@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

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
    margin-top: 2px;
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

  <body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="..\indexUser.php?userID=<?php echo $userID ?>"><img src="..\css/pics/HomeSwapLogo.png" height=39px; width=39px;> &nbsp; HomeSwap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
      
          <li class="nav-item">
            <a class="nav-link" href="..\Search.php?userID=<?php echo $userID ?>">Search For Apartment</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href='..\Orders.php?userID=<?php echo $userID?>'>My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="..\GoogleLogin/Logout.php">Logout</a>
          </li>
            <li class="nav-item active">
            <a href="#" class="nav-link" style="color:#B39CD0;">&nbsp;&nbsp;Welcome, <?php echo $fname; ?> </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container" style="min-height: 484px;">
<!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Search Apartment</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href='..\indexUser.php?userID=<?php echo $userID?>'>Home</a>
        </li>
        <li class="breadcrumb-item"><a href='..\Search.php?userID=<?php echo $userID?>'>Search</a></li>
         <li class="breadcrumb-item active">Search Results</li>
      </ol>

      <!-- /.row -->
      <hr>
<?php
	ini_set('display_errors',0);

  $servername="zebra";
  $username="shirba";
  $password="nD(-cmTvuivT";
  $dbname="shirba_database";

	$title="";
	$description="";
	$country="";
	$city="";

  $userID=$_REQUEST['userID'];

	$qty_input=$_POST['qty_input'];
	$dest=$_POST['dest'];
	$propertyType=$_POST['propertyType'];
	$tripType=$_POST['propertyStyle'];
	$amenities=$_POST['amenities'];
	$accessibility=$_POST['accessibility'];
	$rules=$_POST['rules'];

	$StartDate=$_POST['StartDate'];
	$EndDate=$_POST['EndDate'];

	if ($dest==NULL){
		$dest="";
	}
	else{
		$dest=$_POST['dest'];
	}
	if ($tripType ==NULL){
		$tripType="";
	}
	else{
		$tripArr=$_POST['propertyStyle'];
		$tripType=implode(",",$tripArr);
	}
	if ($propertyType==NULL){
		$propertyType="";
	}
	else{
		$propertyType=$_POST['propertyType'];
	}

	if ($amenities ==NULL){
		$amenities="";
	}
	else{
		$amenArr=$_POST['amenities'];
		$amenities=implode(",",$amenArr);
	}
	if ($accessibility ==NULL){
		$accessibility="";
	}
	else{
		$accessArr=$_POST['accessibility'];
		$accessibility=implode(",",$accessArr);
	}
	if ($rules ==NULL){
		$rules="";
	}
	else{
		$rulesArr=$_POST['rules'];
		$rules=implode(",",$rulesArr);
	}

	if($StartDate==NULL){
	   $StartDate=1;
	 }
	 else{
	 	$StartDate=$_POST['StartDate'];

	 }
	 if($EndDate==NULL){
		$EndDate=1;

	 }
	 else{
		  $EndDate=$_POST['EndDate'];
	 }


	$conn=new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error)
	{
		die("connection failed: ".$conn->connect_error);
	}
	
	$sql="SELECT DISTINCT apt_availability.StartDate, apt_availability.EndDate, apt_photos.photoName,apartments.country,apartments.city, apartments.title, apartments.description, apartments.AptID FROM apartments 
	INNER JOIN apt_availability ON apartments.AptID=apt_availability.AptID
  INNER JOIN apt_photos ON apartments.AptID=apt_photos.AptID
	WHERE 
	(LOWER(country) LIKE LOWER('%$dest%') OR LOWER(city) LIKE LOWER('%$dest%'))
	AND (guestNum='$qty_input')
	AND (propertyStyle LIKE '%$tripType%')
	AND (amenities LIKE '%$amenities%')
	AND (accessibility LIKE '%$accessibility%')
	AND (rules LIKE '%$rules%')
	AND (LOWER(propertyType) LIKE LOWER('%$propertyType%'))
  AND ((($StartDate=1) AND ($EndDate=1))
OR (((DATE(apt_availability.StartDate)) LIKE (DATE('$StartDate'))) AND ('$EndDate'=1))
OR (((DATE(apt_availability.EndDate)) LIKE (DATE('$EndDate'))) AND ('$StartDate'=1))
OR (((DATE(apt_availability.StartDate)) LIKE (DATE('$StartDate'))) AND ((DATE(apt_availability.EndDate)) LIKE (DATE('$EndDate')))))
GROUP BY apartments.AptID
	";


	$result=$conn->query($sql);

	if($result->num_rows>0){
		while ($row=$result->fetch_assoc())
		{

			$newStartDate = date("d/m/Y", strtotime($row["StartDate"]));
      $newEndDate = date("d/m/Y", strtotime($row["EndDate"]));
		    echo '<div class="row" style="padding:20px;">';
        echo '<div class="col-md-5">';
        $id=$row['AptID'];
        echo "<a href='..\BookApartment.php?AptID=$id&userID=$userID&StartDate=$newStartDate&EndDate=$newEndDate'>";
        $photo=$row['photoName'];
        echo "<img class='img-fluid rounded mb-3 mb-md-0' src='..\user_data/$photo'/>";
        echo '</a>';
        echo '</div>';
        echo '<div class="col-md-5">';
        echo '<h3>'.$row["title"].'</h3>';
        echo '<h5>'.$row["city"].', '.$row["country"].'</h5>';
        echo '<p>'.$row["description"].'</p>';

        echo '<p style="font-size:14px; color:#845EC2"><i class="far fa-calendar-alt"></i> '.$newStartDate.'-'. $newEndDate.'</p>';
        echo '</div>';
        echo '<div class="col-md-2">';
        echo "<a class='btn btn-info'style='background-color:#845EC2; border-color:#845EC2 ;' href='..\BookApartment.php?AptID=$id&userID=$userID&StartDate=$newStartDate&EndDate=$newEndDate'>View Apartment
          <span class='glyphicon glyphicon-chevron-right'>";
        echo '</span>';
        echo '</a>';
        echo '</div>';
      	echo '</div>';
      	echo '<hr>';
		}

	}
	else {
	    echo '<br><br>';
	    echo '<h4 style="text-align:center"><i class="far fa-frown" style="color:#C34A36"></i> Unfortunately, no results have been found</h4>';
	}


$conn->close();

?>

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

  </body>

</html>