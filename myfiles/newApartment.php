<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">    
  <script src="datepicker/JQuery.js" type="text/javascript"></script>  
  <script src="datepicker/dist/js/datepicker.min.js"></script>    
  <script src="datepicker/dist/js/i18n/datepicker.en.js"></script>       

  <title>HomeSwap - New Apartment</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <style>
  * {
    box-sizing: border-box;
  }
.col-centered{
    float: none;
    margin: 0 auto;
}
.btn-lg.round {
  border-radius: 24px;
}
  #newApartForm {
    background-color: #ffffff;
    /*margin: 100px auto;*/
    padding: 40px;
    width: 100%;
    min-width: 300px;
  }
  .control-group option, .form-check-input label{
    text-align: center;
  }


  /* Mark input boxes that gets an error on validation: */
  #newApartForm input.invalid {
    background-color: #ffdddd;
  }

    #newApartForm textarea.invalid {
    background-color: #ffdddd;
  }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    #newApartForm button {
      background-color: #4CAF50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      font-size: 17px;
      cursor: pointer;
      width:100%;
    }

    #newApartForm button:hover {
      opacity: 0.8;
    }

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 30px;
      width: 30px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #4CAF50;
    }

    .wrapper{
  display:none;
}
.btnAddDates{
    display:none;

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
            <a class="nav-link" href="https://shirba.mtacloud.co.il/GoogleLogin/Login.php">Login</a>
          </li>
                      <li class="nav-item active">
            <a href="#" class="nav-link" style="color:#B39CD0;">&nbsp;&nbsp;Welcome, Guest!</a>
            </li>

           </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Add Apartment
      <small>New</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">New Apartment</li>
    </ol>

    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>

    <form name="sentMessage" id="newApartForm" enctype="multipart/form-data" novalidate action="PHP/insertApartment.php" method="POST" >
 <div class="tab">
  <div class="row">
    <div class="col-lg-6 mb-4 col-centered">
      <h6>Where's your apartment located?</h6>               
      <div class="control-group form-group">
        <div class="controls">
          <label>* Country:</label>
          <input type="text" class="form-control mandatory" id="country" name="country">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>* City:</label>
          <input type="text" class="form-control mandatory" id="city" name="city">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>* Street:</label>
          <input type="text" class="form-control mandatory" id="street" name="street">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>* Apartment No.:</label>
          <input type="number" class="form-control mandatory" id="aptNum" name="aptNum">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Zip Code:</label>
          <input type="number" class="form-control" id="zipCode" name="zipCode">
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
     <h6>Tell us about your place...</h6>   
     <div class="control-group form-group">
      <div class="controls">
        <label>* Title:</label>
        <textarea class="form-control mandatory" id="title" name="title" rows="2" placeholder="Maximum 100 characters" maxlength= "100" required></textarea>
      </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>Description:</label>
        <textarea  class="form-control" id="description" name="description" rows="7" placeholder="Maximum 400 characters" maxlength= "400" required></textarea>
      </div>
    </div>

    <div class="control-group form-group">
      <div class="controls">
        <h6>* Add apartment photos</h6> 
        <label class="custom-file-upload"> 
         <input type="file" class="form-control-file mandatory" maxlength="400" name="apartPhotos[]" multiple>
       </label> 
     </div>
   </div>


 </div>       
 <div id="success"></div>
 <!-- For success/fail messages -->
 <div class="row" id="btn">

</div>

</div>
<!-- /.row -->
</div>
<!-- /.tab -->


<div class="tab">
  <div class="row">
    <div class="col-lg-12 mb-4 col-centered">
       <div class="row">
    <div class="col-lg-6 mb-4 col-centered d-inline-block">
      <div class="control-group form-group">
        <div class="controls">
         <h6 style="padding:5px;">* Max guests:</h6>        
         <input type="number" class="form-control mandatory" min="1" id="guestNum" name="guestNum">
       </div>
     </div>      
  </div>
  <div class="col-lg-6 mb-4 col-centered d-inline-block">
     <div class="control-group form-group">
      <div class="controls">
        <label for="sel1"><h6>What is your property type?</h6></label>
        <select class="form-control" id="sel1" name="propertyType">
          <option name="villa">Villa</option>
          <option name="apartment">Apartment</option>
          <option name="condominium">Condominium</option>
          <option name="loft">Loft</option>
        </select>
      </div>
    </div>
</div>
</div>
    <div class="control-group form-group">
      <div class="controls">
        <div class="card mb-4">
          <h6 class="card-header">What catagorizes your apartment?</h6>
          <div class="card-body">
            <div class="input-group">
             <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="seaView" id="seaView" name="propertyStyle[]">
              <label class="form-check-label" for="seaView">Sea view</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="urban" type="checkbox" value="urban" name="propertyStyle[]">
              <label class="form-check-label" for="urban">Urban</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="countryHouse" id="countryHouse" name="propertyStyle[]">
              <label class="form-check-label" for="countryHouse">Country house</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="openSpace" id="openSpace" name="propertyStyle[]">
              <label class="form-check-label" for="openSpace">Open space</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" value="forFamilies" id="forFamilies" name="propertyStyle[]">
              <label class="form-check-label" for="forFamilies">For families</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   <div class="col-lg-12 mb-4 col-centered">

  <div class="control-group form-group">
    <div class="controls">
      <div class="card mb-4">
        <h6 class="card-header">What amenities do you offer?</h6>
        <div class="card-body">
          <div class="input-group">
          <div class="col-lg-3 mb-4">

           <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="WIFI" value="WIFI" name="amenities[]">
            <label class="form-check-label" for="WIFI"><i class="fas fa-wifi"></i> WIFI</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="parking" id="parking" name="amenities[]">
            <label class="form-check-label" for="parking"><i class="fas fa-parking"></i> Parking</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="balcony" id="balcony" name="amenities[]">
            <label class="form-check-label" for="balcony"><i class="fas fa-chess-rook"></i> Balcony</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="pool" value="pool" name="amenities[]">
            <label class="form-check-label" for="pool"><i class="fas fa-swimming-pool"></i>  Pool</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="hot_tub" id="hot_tub" name="amenities[]">
            <label class="form-check-label" for="hot_tub"><i class="fas fa-hot-tub"></i> Hot-Tub</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="safe" value="safe" name="amenities[]">
            <label class="form-check-label" for="safe"><i class="fas fa-key"></i> Safe</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="kitchen" value="kitchen" name="amenities[]">
            <label class="form-check-label" for="kitchen"><i class="fas fa-utensils"></i> Kitchen</label>
          </div>

        </div>

      <div class="col-lg-4 mb-4">

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="workspace" id="workspace" name="amenities[]">
            <label class="form-check-label" for="workspace"><i class="fas fa-briefcase"></i> Workspace</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="TV" value="TV" name="amenities[]">
            <label class="form-check-label" for="TV"><i class="fas fa-tv"></i> TV</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" id="iron" type="checkbox" value="iron" name="amenities[]">
            <label class="form-check-label" for="iron"><i class="fas fa-tshirt"></i> Iron</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" id="gym" type="checkbox" value="gym" name="amenities[]">
            <label class="form-check-label" for="gym"><i class="fas fa-dumbbell"></i>  Gym</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" id="fire_place" type="checkbox" value="fire_place" name="amenities[]">
            <label class="form-check-label" for="fire_place"><i class="fas fa-fire"></i> Fire Place</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" id="washing_machine" type="checkbox" value="washing_machine" name="amenities[]">
            <label class="form-check-label" for="washing_machine"><i class="fas fa-tint"></i> Washing Machine</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="air_conditioner" id="air_conditioner" name="amenities[]">
            <label class="form-check-label" for="air_conditioner"><i class="fas fa-snowflake"></i>  Air Conditioner</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="card mb-4">
  <h6 class="card-header">Indicate apartment rulles:</h6>
  <div class="card-body">
    <div class="input-group">

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="smoking_allowed" name="rules[]" value="smoking_allowed">
        <label class="form-check-label" for="smoking_allowed"><i class="fas fa-smoking"></i> Smoking allowed<br></label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="pets_allowed" name="rules[]" value="pets_allowed">
        <label class="form-check-label" for="pets_allowed"><i class="fas fa-paw"></i> Pets allowed<br></label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="suitable_for_events" name="rules[]" value="suitable_for_events">
        <label class="form-check-label" for="suitable_for_events"><i class="fas fa-cocktail"></i> Suitable for events<br></label>
      </div>

    </div>
  </div>
</div>

<div class="card mb-4">
  <h6 class="card-header">accessibility in the apartment:</h6>
  <div class="card-body">
    <div class="input-group">

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="wide_corridor" name="accessibility[]" value="wide_corridor">
        <label class="form-check-label" for="wide_corridor">Wide corridor</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" value="staircase_free" id="staircase_free" name="accessibility[]">
        <label class="form-check-label" for="staircase_free">Staircase free</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="elivator" value="elivator" name="accessibility[]">
        <label class="form-check-label" for="elivator">Elivator</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="accesible_parking" value="accesible_parking" name="accessibility[]" >
        <label class="form-check-label" for="accesible_parking">Accesible parking</label>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<div class="tab">
  <div class="row" align="center">
    <div class="col-lg-8 mb-4 col-centered">
      <h5>Update your apartment availibility</h5>
      <p>Please enter a date range by choosing start and end date.<br>
      If needed, press the <b>+</b> button to add more available dates.</p>
      <br>

      <div class="control-group form-group">
        <div class="controls">
         <input id="fdateRange" style="width:50%; height:40px" placeholder="mm/dd/yyyy - mm/dd/yyyy" name="fdateRange" type="text"
         data-range="true"
         data-multiple-dates-separator=" - "
         data-language="en"
         class="datepicker-here mandatory" autocomplete="off"/>

         <input id="btnAdd" type="button" onclick="addAvailability()" value="+" />
         <div id=dp"></div>
         <input id="box1" placeholder="mm/dd/yyyy - mm/dd/yyyy" class="wrapper datepicker-here" type="text"
        data-range="true"
        data-multiple-dates-separator=" - "
        data-language="en"
        style="width:50%; height:40px"
        autocomplete="off"/>
        <input id="box2" placeholder="mm/dd/yyyy - mm/dd/yyyy" class="wrapper datepicker-here" type="text"
        data-range="true"
        data-multiple-dates-separator=" - "
        data-language="en"
        style="width:50%; height:40px"
        autocomplete="off"/>
        <input id="box3"placeholder="mm/dd/yyyy - mm/dd/yyyy" class="wrapper datepicker-here" type="text"
        data-range="true"
        data-multiple-dates-separator=" - "
        data-language="en"
        style="width:50%; height:40px"
        autocomplete="off"/>
        <input id="box4" placeholder="mm/dd/yyyy - mm/dd/yyyy" class="wrapper datepicker-here" type="text"
        data-range="true"
        data-multiple-dates-separator=" - "
        data-language="en"
        style="width:50%; height:40px"
        autocomplete="off"/>
         </div>    
       </div>

<?php 
      $userID=$_REQUEST['userID']; ?>

        <input id="sd" name="sd" hidden />
        <input id="ed" name="ed" hidden/> 
        <input id="sd1" name="sd1" hidden />
        <input id="ed1" name="ed1" hidden/> 
        <input id="sd2" name="sd2" hidden />
        <input id="ed2" name="ed2" hidden/>  
        <input id="sd3" name="sd3" hidden />
        <input id="ed3" name="ed3" hidden/> 
        <input id="sd4" name="sd4" hidden />
        <input id="ed4" name="ed4" hidden/> 

        <input id="userID" name="userID" value='<?php echo $userID ?>'hidden/>
  
   </div>



 </div>
 <!-- /.row -->
</div>
<!-- /.tab -->
<div class="col-lg-6 mb-5 col-centered">
  <div style="overflow:auto;">
    <button class="btn btn-primary btn-lg round btn-block" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button class="btn btn-primary btn-lg round btn-block" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>



</form>
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white"> &copy; Your HomeSwap 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->

  <script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("newApartForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("mandatory");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


  var counter = 0;
  var gId = '';
  var gName = '';
     function nextIdxAndName() {
      var id = "fdateRange"+parseInt(counter);
      gId = id;
      var name = "fdateRange"+parseInt(counter);
      counter++;
      gName = name;
    }


function addAvailability() { 

  $('.wrapper').show();
  var myDatepicker = $('.wrapper').datepicker().data('datepicker');
  myDatepicker.show();
  $('#btnAdd').hide();


  }
  var arr;

  $('.datepicker-here ').blur(function convertRangeToDates() {
  var range = document.getElementById("fdateRange").value;
  //separate the range to two dates (string)
  var startDate = range.substring(0,10);
  var endDate = range.substring(13,23);

var newSdate = startDate.replace(/(..).(..).(....)/, "$3-$1-$2");
var newEdate = endDate.replace(/(..).(..).(....)/, "$3-$1-$2");


  document.getElementById("sd").value = newSdate;
  document.getElementById("ed").value = newEdate;


    var range1 = document.getElementById("box1").value;
  //separate the range to two dates (string)
  var startDate1 = range1.substring(0,10);
  var endDate1 = range1.substring(13,23);

var newSdate1 = startDate1.replace(/(..).(..).(....)/, "$3-$1-$2");
var newEdate1 = endDate1.replace(/(..).(..).(....)/, "$3-$1-$2");


  document.getElementById("sd1").value = newSdate1;
  document.getElementById("ed1").value = newEdate1;
  

  var range2 = document.getElementById("box2").value;
  //separate the range to two dates (string)
  var startDate2 = range2.substring(0,10);
  var endDate2 = range2.substring(13,23);

var newSdate2 = startDate2.replace(/(..).(..).(....)/, "$3-$1-$2");
var newEdate2 = endDate2.replace(/(..).(..).(....)/, "$3-$1-$2");


  document.getElementById("sd2").value = newSdate2;
  document.getElementById("ed2").value = newEdate2;


    var range3 = document.getElementById("box3").value;
  //separate the range to two dates (string)
  var startDate3 = range3.substring(0,10);
  var endDate3 = range3.substring(13,23);

var newSdate3 = startDate3.replace(/(..).(..).(....)/, "$3-$1-$2");
var newEdate3 = endDate3.replace(/(..).(..).(....)/, "$3-$1-$2");


  document.getElementById("sd3").value = newSdate3;
  document.getElementById("ed3").value = newEdate3;

    var range4 = document.getElementById("box4").value;
  //separate the range to two dates (string)
  var startDate4 = range4.substring(0,10);
  var endDate4 = range4.substring(13,23);

var newSdate4 = startDate4.replace(/(..).(..).(....)/, "$3-$1-$2");
var newEdate4 = endDate4.replace(/(..).(..).(....)/, "$3-$1-$2");


  document.getElementById("sd4").value = newSdate4;
  document.getElementById("ed4").value = newEdate4;
  });

</script>


</body>

</html>


