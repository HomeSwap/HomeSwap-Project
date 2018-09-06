  <?php

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="database";
  
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

       // <!-- Nav tabs -->
    // echo '<ul class="nav nav-tabs">';
    // echo '<li class="nav-item">';
    // echo '<a class="nav-link active" href="#upcomingTrips">Upcoming Trips </a>';
    // echo '</li>';
    // echo '<li class="nav-item">';
    // echo '<a class="nav-link" href="#myOrders">My Orders</a>'; 
    // echo'</li>';
    //   echo '</ul>';
              // <!-- Tab panes -->
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


      // echo '<div id="upcomingTrips" class="container tab-pane active"><br>';





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
 echo '</td>';
  echo '</tr>';
echo '</tbody>';


  }
  
  // echo'</table>';
  // echo '<br><br>';
}



  if ($result1->num_rows>0) 
  {
    //   echo '<table id="myTable" class="table table-hover">';

    //   echo '<thead>';

    //       echo '<tr>';
    //       echo '<div align="left">';
    // echo'<th scope="col"><h5>Order Number</h5></th>';
    // echo'<th scope="col"><h5>Status</h5></th>';
    // echo'<th scope="col"><h5>Dates</h5></th>';
    // echo'<th scope="col"><h5>Details</h5></th>';
    // echo '<th></th>';
    //  echo '<th></th>';
    //   echo '</div>';
    //   echo'</tr>';
    //   echo'</thead>';


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
 echo '</td>';
  echo '</tr>';
echo '</tbody>';


  }
  
 
  // echo'</div>';
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

      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="https://www.w3schools.com/lib/w3.js"></script>

     <style >
       
       button{
       background-color: #ffffff;
/*       margin-right: 100px;
*/       margin-left:0px;
/*       padding-left:0px;
*/       }

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

      <!-- Page Content -->

        <!-- Page Heading/Breadcrumbs -->
<!--       <div class="container">
        <h1 class="mt-4 mb-3">Orders </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active">Orders</li>
        </ol>

        <div class="row">
          <div class="col-lg-12 col-sm-6">
               Nav tabs -->
<!--              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#upcomingTrips">Upcoming Trips </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#myOrders">My Orders</a>
                </li>
              </ul>
               Tab panes -->
<!--               <div class="tab-content"> 
 --><!--                 <div id="upcomingTrips" class="container tab-pane active"><br>
                    <table class="table">
                    <thead>
                      <tr>
                    <th><button type="button" class="btn btn-default"><h6>Order Number</h6></button></th>
                    <th><button type="button" class="btn btn-default"><h6>Status</h6></button></th>
                    <th><button type="button" class="btn btn-default"><h6>Dates</h6></button></th>
                    <th><button type="button" class="btn btn-default"><h6>Details</h6></button></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr >
                      <td>12345678</td>
                      <td>Approved</td>
                      <td>12/08/18 - 20/08/18</td>
                      <td>Berlin,Germany</td>
                      <td>
                        <a class='btn btn-primary' href='BookApartmentRefused.php?AptID=<?php  $AptID?> &userID=<?php  $userID?>&StartDate=<?php  $StartDate ?>&EndDate=<?php  $EndDate?>'>View</a>
                      </td>
                      <td><button type="button" class="btn btn-outline-danger">Cancel</button></td>
                    </tr>
                    </tbody>
                  </table>

                  </div> -->
   <!--                <div id="myOrders" class="container tab-pane fade"><br>
                    <table class="table">
                    <thead>
                      <tr>
                    <th><button type="button" class="btn btn-default"><h6>Order Number</h6></button></th>
                    <th><button type="button" class="btn btn-default"><h6>Status</h6></button></th>
                    <th><button type="button" class="btn btn-default"><h6>Dates</h6></button></th>
                    <th><button type="button" class="btn btn-default"><h6>Details</h6></button></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>12345678</td>
                      <td>Approved</td>
                      <td>12/08/18 - 20/08/18</td>
                      <td>Berlin,Germany</td>
                    </tr>
                    <tr>
                      <td>12345678</td>
                      <td>Approved</td>
                      <td>12/08/18 - 20/08/18</td>
                      <td>Berlin,Germany</td>
                    </tr>
                    </tbody>
                    </table>
                  </div> -->
   <!--              </div>
              </div>
            </div>
      </div> -->

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
