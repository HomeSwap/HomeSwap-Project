  <?php

  $servername="zebra";
  $username="shirba";
  $password="nD(-cmTvuivT";
  $dbname="shirba_database";
  
  $userID=$_REQUEST['userID'];

  $conn=new mysqli($servername,$username,$password,$dbname);
  if ($conn->connect_error)
  {
    die("connection failed: ".$conn->connect_error);
  }

  $sqlUser = "SELECT Fname from users where userID = '$userID'";  
  
  $sql="SELECT apartments.AptID, apartments.country,apartments.city, orders.orderID, orders.StartDate, orders.EndDate  FROM apartments
  INNER JOIN orders ON apartments.AptID=orders.AptID
  WHERE orders.RequesterID='$userID'
  ";


  $sql1="SELECT apartments.AptID, apartments.country,apartments.city, orders.orderID, orders.StartDate, orders.EndDate  FROM apartments
  INNER JOIN orders ON apartments.AptID=orders.RequesterAptID
  WHERE orders.userID='$userID'
  ";
  $result=$conn->query($sql);
  $result1=$conn->query($sql1);

  $resultUser = mysqli_query($conn,$sqlUser);
  $rows = mysqli_fetch_array($resultUser);


  if ($rows){
    $fname=$rows['Fname'];
  }

    echo '<div class="container">';
    echo '<h1 class="mt-4 mb-3">Orders </h1>';
    echo '<ol class="breadcrumb">';
    echo '<li class="breadcrumb-item">';
    echo "<a href='indexUser.php?userID=$userID'>Home</a>";
    echo '</li>';
    echo '<li class="breadcrumb-item active">Orders</li>';
    echo '</ol>'; 

    echo '<div class="row">';
    echo '<div class="col-lg-12 col-sm-6">';

    echo '<br><h4>My Trips</h4>';
    echo '<div>';
    echo '<br>';

    echo '<table id="myTable" class="table table-hover">';

    echo '<thead>';

    echo '<tr>';
    echo '<div align="left">';
    echo'<th scope="col"><h5>Order Number</h5></th>';
    echo'<th scope="col"><h5>Status</h5></th>';
    echo'<th scope="col"><h5>Dates</h5></th>';
    echo'<th scope="col"><h5>Details</h5></th>';
    echo '<th></th>';
    echo '<th></th>';
    echo '</div>';
    echo'</tr>';
    echo'</thead>';



  if ($result->num_rows>0) 
  {

    while ($row=$result->fetch_assoc()){
  

  $AptID=$row['AptID'];
  $orderID= $row['orderID'];
  $StartDate= $row['StartDate'];
  $EndDate= $row['EndDate'];
  $country= $row['country'];
  $city=$row['city'];
  $currentDate=date("Y-m-d");
  $trip="";
  $bool=false;


  if ($currentDate>$StartDate){
    $trip="Past";
    $color='#4D8076';
  }
  else if ($currentDate<=$StartDate){
    $trip="Upcoming";
    $color='#00C9A7';
    $bool=true;
  }


    echo '<tbody>';
    echo '<tr class="item">';
    echo '<td> '.$orderID.'</td>';
    echo '<td style="color:'.$color.'">'.$trip.'</td>';
    echo '<td>'.$StartDate.' - '.$EndDate.'</td>';
    echo '<td>'.$city.', '.$country.'</td>';
    echo'<td>';
    echo "<a class='btn btn-outline-info' href='ViewOrder.php?AptID=$AptID&userID=$userID&StartDate=$StartDate&EndDate=$EndDate'>View</a>";
    echo '</td>';
    echo '<td>';
    if ($bool){
    echo '<button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-outline-danger">Cancel</button>';
    echo '<script type="text/javascript">';
    echo 'function cancelOrder(){';
    echo "window.location='PHP/cancelOrder.php?userID=$userID&AptID=$AptID&StartDate=$StartDate&EndDate=$EndDate';";
    echo '}';
    echo '</script>';
 }
   else{
 	echo '<button data-toggle="modal" data-target="#exampleModalReview" type="button" class="btn btn-outline-success">Review</button>';
 	 	  echo '<script type="text/javascript">';
  echo 'function review(){';
    echo "window.location='PHP/addReview.php?userID=$userID&AptID=$AptID&';";
    echo '}';
    echo '</script>';
 }
    echo '</td>';
    echo '</tr>';
    echo '</tbody>';


  }
  
}



  if ($result1->num_rows>0) 
  {

    while ($row=$result1->fetch_assoc()){
  
  $AptID=$row['AptID'];
  $orderID= $row['orderID'];
  $StartDate= $row['StartDate'];
  $EndDate= $row['EndDate'];
  $country= $row['country'];
  $city=$row['city'];
  $currentDate=date("Y-m-d");
  $trip="";
  $bool=false;


  if ($currentDate>$StartDate){
    $trip="Past";
    $color='#4D8076';
  }
  else if ($currentDate<=$StartDate){
    $trip="Upcoming";
    $color='#00C9A7';
    $bool=true;

  }

    echo '<tbody>';
    echo '<tr class="item">';
    echo '<td> '.$orderID.'</td>';
    echo '<td style="color:'.$color.'">'.$trip.'</td>';
    echo '<td>'.$StartDate.' - '.$EndDate.'</td>';
    echo '<td>'.$city.', '.$country.'</td>';
    echo'<td>';
    echo "<a class='btn btn-outline-info' href='ViewOrder.php?AptID=$AptID&userID=$userID&StartDate=$StartDate&EndDate=$EndDate'>View</a>";
    echo '</td>';
    echo '<td>';
    if ($bool){
    echo '<button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-outline-danger">Cancel</button>';
    echo '<script type="text/javascript">';
    echo 'function cancelOrder(){';
    echo "window.location='PHP/cancelOrder.php?userID=$userID&AptID=$AptID&StartDate=$StartDate&EndDate=$EndDate';";
    echo '}';
    echo '</script>';
 }
   else{
 	echo '<button data-toggle="modal" data-target="#exampleModalReview" type="button" class="btn btn-outline-success">Review</button>';
 	 	  echo '<script type="text/javascript">';
  echo 'function review(){';
    echo "window.location='PHP/addReview.php?userID=$userID&AptID=$AptID&';";
    echo '}';
    echo '</script>';
 }
    echo '</td>';
    echo '</tr>';
    echo '</tbody>';


  }
   
}
    echo'</table>';
    echo '<br><br>';

    echo  '</div>';
    echo  '</div>';
    echo  '</div>';
    echo  '</div>';

  ?>

  <!DOCTYPE html>
  <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>HomeSwap - Orders</title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">

      <link href="css/modern-business.css" rel="stylesheet">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="https://www.w3schools.com/lib/w3.js"></script>
     <sctript src="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" ></sctript>

     <style >
     @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

       
       button{
       background-color: #ffffff;
        margin-left:0px;
       }
       
       
fieldset, label { margin: 0; padding: 0; }
/*body{ margin: 20px; }*/
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

     </style>

    </head>

    <body onload="sortTable()">
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

          <li class="nav-item active">
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

  <div class="container" style="min-height: 165px;">



      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to cancel this order?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" onclick="cancelOrder()" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apartment Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="PHP/addReview.php?AptID=<?php echo $AptID?>&userID=<?php echo $userID ?>" method="POST">
        	 <span>Rate:</span>
          <div class="form-group">
<!--            Rate: <label for="recipient-name" class="col-form-label"></label>
 -->            <!-- <input type="text" class="form-control" id="recipient-name"> -->

            <fieldset class="rating">
            	
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"></label>
            <textarea class="form-control" maxlength="200" name="review" id="message-text" placeholder="Write your review"></textarea>
          </div>
 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send review</button>
      </div>
             </form>
      </div>
    </div>
  </div>
</div>



</div>
      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white"> &copy; HomeSwap 2018</p>
        </div>
        <!-- /.container -->
      </footer>

      <script>
  $(document).ready(function(){
      $(".nav-tabs a").click(function(){
          $(this).tab('show');
      });
  });
  </script>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>

    function sortTable(){
      w3.sortHTML('#myTable', '.item', 'td:nth-child(2)');
    }

</script>

    </body>

  </html>
