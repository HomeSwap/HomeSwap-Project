
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

$userID=$_POST['userID'];

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

$sql = "INSERT INTO apartments (country, city, street, aptNum, zipCode, title, description, guestNum, propertyType, amenities, accessibility, rules, propertyStyle, userID)
VALUES ('$country', '$city', '$street', '$aptNum', '$zipCode','$title', '$description', '$guestNum', '$propertyType', '$aptAmenities', '$aptAccessibility', '$aptRules', '$aptStyle', '$userID')";

if ($conn->query($sql) === TRUE) {
	$aptID = $conn->insert_id;
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

//dates availabillity
$StartDate=$_POST['sd'];
$EndDate=$_POST['ed'];
$StartDate1=$_POST['sd1'];
$EndDate1=$_POST['ed1'];
$StartDate2=$_POST['sd2'];
$EndDate2=$_POST['ed2'];
$StartDate3=$_POST['sd3'];
$EndDate3=$_POST['ed3'];
$StartDate4=$_POST['sd4'];
$EndDate4=$_POST['ed4'];

$bool=true;

if (($StartDate != NULL)AND($EndDate != NULL)){
	$sqlDate = "INSERT INTO apt_availability (StartDate, EndDate, AptID) VALUES (DATE '$StartDate',DATE '$EndDate', $aptID)";
	if(($conn->query($sqlDate) != TRUE)) {
		echo "Error: " . $sqlDate . "<br>" . $conn->error;
		$bool=false;
	}
}
if (($StartDate1 != NULL)AND($EndDate1 != NULL)){
	$sqlDate1 = "INSERT INTO apt_availability (StartDate, EndDate, AptID) VALUES (DATE '$StartDate1',DATE '$EndDate1', $aptID)";
	if(($conn->query($sqlDate1) != TRUE)) {
		echo "Error: " . $sqlDate1 . "<br>" . $conn->error;
		$bool=false;
	}
}
if(($StartDate2 != NULL)AND($EndDate2 != NULL)){
	$sqlDate2 = "INSERT INTO apt_availability (StartDate, EndDate, AptID) VALUES (DATE '$StartDate2',DATE '$EndDate2', $aptID)";
	if(($conn->query($sqlDate2) != TRUE)) {
		echo "Error: " . $sqlDate2 . "<br>" . $conn->error;
		$bool=false;
	}
}
if (($StartDate3 != NULL)AND($EndDate3 != NULL)){
	$sqlDate3 = "INSERT INTO apt_availability (StartDate, EndDate, AptID) VALUES (DATE '$StartDate3',DATE '$EndDate3', $aptID)";
	if(($conn->query($sqlDate3) != TRUE)) {
		echo "Error: " . $sqlDate3 . "<br>" . $conn->error;
		$bool=false;
	}
}
if(($StartDate4 != NULL)AND($EndDate4 != NULL)){
	$sqlDate4 = "INSERT INTO apt_availability (StartDate, EndDate, AptID) VALUES (DATE '$StartDate4',DATE '$EndDate4', $aptID)";
	if(($conn->query($sqlDate4) != TRUE)) {
		echo "Error: " . $sqlDate4 . "<br>" . $conn->error;
		$bool=false;
	}
}

//PHOTOS

$imageData = array();
if(isset($_FILES['apartPhotos'])){
    $errors= array();
    foreach($_FILES['apartPhotos']['tmp_name'] as $key => $tmp_name ){
        $file_name = $_FILES['apartPhotos']['name'][$key];
        $file_tmp =$_FILES['apartPhotos']['tmp_name'][$key];
        if($file_size > 2097152){
            $errors[]='File size must be less than 2 MB';
        }
        
        array_push($imageData, $file_name);
       
        $desired_dir="../user_data";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);        // Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"../user_data/".$file_name);
            }else{                                  //rename the file if another one exist
                $new_dir="../user_data/".$file_name.time();
                 rename($file_tmp,$new_dir) ;               
            }
                    
        }else{
                print_r($errors);
        }
        $query="INSERT into apt_photos (photoName, AptID) VALUES('$file_name', '$aptID'); ";
        ($conn->query($query));
    }

    // if(empty($error)){
    //     //echo "Success";
    //     //print_r($imageData);
    //     //echo sizeof($imageData);
    //     //for($i=0;$i<sizeof($imageData);$i++){
    //     //  echo $imageData[$i];            
    //     //}
    //     $imgDt = implode("|", $imageData);
    //     //$query="INSERT into apt_photos (`photoName`) VALUES('$imgDt'); ";
    //     // mysql_query($query); 
    //     $query="INSERT into apt_photos (photoName, AptID) VALUES('$file_name', '$aptID'); ";
    // }
}

if ($bool){
	header("Location:..\GoogleLogin/Login.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo "Error: " . $query . "<br>" . $conn->error;
}


///





// if ($bool){
//  header("Location:..\sendPage2.html");
// }

// if (($conn->query($sqlDate) === TRUE)OR($conn->query($sqlDate1))OR($conn->query($sqlDate2))OR($conn->query($sqlDate3))OR($conn->query($sqlDate4))) {
// 	    header("Location:..\sendPage2.html");

// } else {
// 	echo "Error: " . $sqlDate . "<br>" . $conn->error;
// 	echo "Error: " . $sqlDate1 . "<br>" . $conn->error;
// 	echo "Error: " . $sqlDate2 . "<br>" . $conn->error;
// 	echo "Error: " . $sqlDate3 . "<br>" . $conn->error;
// 	echo "Error: " . $sqlDate4 . "<br>" . $conn->error;
// }

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