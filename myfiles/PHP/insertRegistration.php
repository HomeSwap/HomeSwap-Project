
<?php

	$servername="zebra";
	$username="shirba";
	$password="nD(-cmTvuivT";
	$dbname="shirba_database";

	$userID=$_POST['userID'];
	$TempFname=$_POST['Fname'];
	$email=$_POST['email'];
	$TempLname=$_POST['Lname'];
	$pass=$_POST['password'];
	$phone=$_POST['phone'];
	$TempCountry=$_POST['country'];
	$TempCity=$_POST['city'];
	$TempStreet=$_POST['street'];
	$aptNum=$_POST['aptNum'];
	$zipCode=$_POST['zipCode'];

	$Fname = str_replace("'", "''", $TempFname);
	$Lname= str_replace("'", "''", $TempLname);
	$country = str_replace("'", "''", $TempCountry);
	$city= str_replace("'", "''", $TempCity);
	$street= str_replace("'", "''", $TempStreet);


	//checkbox
	$tripArr=$_POST['tripType']; //save in array variable
	$userTripType=implode(",",$tripArr); //add comma ,

	$ameniArr=$_POST['amenities']; //save in array variable
	$userAmeni=implode(",",$ameniArr); //add comma ,

	$reqArr=$_POST['requests']; //save in array variable
	$userReq=implode(",",$reqArr); //add comma ,

	$accessArr=$_POST['accessibilityNeeds']; //save in array variable
	$userAcces=implode(",",$accessArr); //add comma ,


	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	} 
	// $sql1 = "SELECT * from users where email = '$email'";	
	$result = mysqli_query($conn,$sql1);
	$rows = mysqli_fetch_array($result);

	$sql = "INSERT INTO users (userID, Fname, Lname, email, password, phone, usersCountry, usersCity, street, aptNum, zipCode, tripType, amenities, requests, accessibilityNeeds)
	VALUES ('$userID', '$Fname', '$Lname' , '$email', '$pass', '$phone', '$country', '$city', '$street', '$aptNum', '$zipCode', '$userTripType', '$userAmeni', '$userReq' , '$userAcces')";

	if ($conn->query($sql) === TRUE) {
		    header("Location:..\sendPage.php?userID=$userID");
			
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();
?>