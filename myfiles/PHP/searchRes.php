

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

    <!-- Custom styles for this template -->
    <link href="..\css/modern-business.css" rel="stylesheet">

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

  <body>
    <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="indexUser.html">HomeSwap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="Registration.html">Register</a>
          </li> -->
          
          <li class="nav-item">
            <a class="nav-link" href="newApartment.html">New apartment</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="Search.html">search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="SearchResults.html">search Results</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="BookApartment.html">book Apartment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Orders.html">My Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="GoogleLogin/Logout.php">Logout</a>
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
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="search.html">Search</a></li>
         <li class="breadcrumb-item active">Search Results</li>
      </ol>



      <!-- /.row -->
      <hr>
<?php
	ini_set('display_errors',0);
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="database";

	$title="";
	$description="";
	$country="";
	$city="";

	// $StartDate=$_POST['StartDate'];
	// $EndtDate=$_POST['EndtDate'];
	$qty_input=$_POST['qty_input'];
	$dest=$_POST['dest'];
	$propertyType=$_POST['propertyType'];
	$tripType=$_POST['propertyStyle'];
	// $tripType=implode(",",$tripArr);
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
		$StartDate="";
	}
	else{
		$StartDate=$_POST['StartDate'];

	}
	if($EndDate==NULL){
		// $EndDate=DATE('9999-99-99');
		$EndDate="";

	}
	else{
		$EndDate=$_POST['EndDate'];
	}


	$conn=new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error)
	{
		die("connection failed: ".$conn->connect_error);
	}
	
	$sql="SELECT DISTINCT title,description FROM apartments 
	INNER JOIN apt_availability ON apartments.AptID=apt_availability.AptID
	WHERE 
	(LOWER(country) LIKE LOWER('%$dest%') OR LOWER(city) LIKE LOWER('%$dest%'))
	AND (guestNum='$qty_input')
	AND (propertyStyle LIKE '%$tripType%')
	AND (amenities LIKE '%$amenities%')
	AND (accessibility LIKE '%$accessibility%')
	AND (rules LIKE '%$rules%')
	AND (LOWER(propertyType) LIKE LOWER('%$propertyType%'))
	AND (((DATE(apt_availability.StartDate))LIKE (DATE('$StartDate'))) OR  ((DATE(apt_availability.EndDate))LIKE (DATE('$EndDate'))))
	";


// AND (DATE(apt_availability.EndDate)<=DATE('$EndDate'))

// 	$result = mysqli_query($conn,$sql);
// 	$rows = mysqli_fetch_array($result);

// 	if ($rows) 
// 	{
// 		$title=$rows["title"];
// 		$description=$rows["description"];
// 		$country=$rows["country"];
// 		$city=$rows["city"];
// }
// 	else {
//     echo  "<br><br>Unfortunately, there are no results found.";
// 	}

	$result=$conn->query($sql);

	if($result->num_rows>0){
		while ($row=$result->fetch_assoc())
		{
			// echo "<h3>".$row["title"]."</h3>";
			// echo "<tr><td>".$row["AptID"]."</td><td>".$row["country"]."</td><td>".$row["city"]."</td><td>".$row["title"]."</td></tr>";

			
		echo '<div class="row" style="padding:20px;">';
        echo '<div class="col-md-4">';
        echo '<a href="#"">';
        echo '<img class="img-fluid rounded mb-3 mb-md-0" src="..\css/pics/apt02.jpg" alt="">';
        echo '</a>';
        echo '</div>';
        echo '<div class="col-md-4">';
        echo '<h3>'.$row["title"].'</h3>';
        echo '<p>'.$row["description"].'</p>';
        echo '</div>';
        echo '<div class="col-md-4">';
        echo '<a class="btn btn-primary" href="#">View Project
          <span class="glyphicon glyphicon-chevron-right">';
        echo '</span>';
        echo '</a>';
        echo '</div>';
      	echo '</div>';
      	echo '<hr>';
		}

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