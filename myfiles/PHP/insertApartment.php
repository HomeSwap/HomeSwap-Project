
<?php
$country=$_POST['country'];
$city=$_POST['city'];
$street=$_POST['street'];
$aptNum=$_POST['aptNum'];
$zipCode=$_POST['zipCode'];
$title=$_POST['title'];
$description=$_POST['description'];
$guestNum=$_POST['guestNum'];
$propertyType=$_POST['propertyType'];

//checkbox
$ameArr=$_POST['amenities']; //save in array variable
$aptAmenities=implode(",",$ameArr); //add comma ,

$accArr=$_POST['accessibility']; //save in array variable
$aptAccessibility=implode(",",$accArr); //add comma ,

$rulArr=$_POST['rules']; //save in array variable
$aptRules=implode(",",$rulArr); //add comma , 

$styleArr=$_POST['propertyStyle'];
$aptStyle=implode(",",$styleArr);

//server details
$servername="localhost";
$username="root";
$password="";
$dbname="database";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO apartments (country, city, street, aptNum, zipCode, title, description, guestNum, propertyType, amenities, accessibility, rules, propertyStyle)
VALUES ('$country', '$city', '$street', '$aptNum', '$zipCode','$title', '$description', '$guestNum', '$propertyType', '$aptAmenities', '$aptAccessibility', '$aptRules', '$aptStyle')";

if ($conn->query($sql) === TRUE) {
	$aptID = $conn->insert_id;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

//dates availabillity
$StartDate=$_POST['sd'];
$EndDate=$_POST['ed'];


$sqlDate = "INSERT INTO apt_availability (StartDate, EndDate, AptID) VALUES (DATE '$StartDate',DATE '$EndDate', $aptID)";

if ($conn->query($sqlDate) === TRUE) {
	    header("Location:..\sendPage2.html");

} else {
	echo "Error: " . $sqlDate . "<br>" . $conn->error;
}

//upload photos



// for($i=0; $i<count($_FILES["apartPhotos"]["name"]); $i++)
// {
// 	$filetmp = $_FILES["apartPhotos"]["tmp_name"][$i];
// 	$filename = $_FILES["apartPhotos"]["name"][$i];	
// 	$filename = $_FILES["apartPhotos"]["type"][$i];	
// 	$filepath = "photo/".$filename;

// 	move_uploaded_file($filetmp, $filepath);

// 	$photoSql = "INSERT INTO apartment_photos (img_name, img_path, img_type) VALUES ('$filename', '$filepath', '$filetype')";
// 	$result = mysql_query($photoSql);
// }



	$conn->close();
	?>