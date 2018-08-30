//create a folder called user_data in the root, also create db with table name upload_data & two fields id, FILE_NAME

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning Advance</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple/>
    <input type="submit"/>
</form>
</body>
</html>


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

// $query1 = 'Insert into apt_photos values("",1,"two","three","four")';
// mysql_query($query1);
// 

$imageData = array();
if(isset($_FILES['files'])){
    $errors= array();
    foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        $file_name = $_FILES['files']['name'][$key];
        $file_tmp =$_FILES['files']['tmp_name'][$key];
        if($file_size > 2097152){
            $errors[]='File size must be less than 2 MB';
        }
        
        array_push($imageData, $file_name);
       
        $desired_dir="user_data";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);        // Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"user_data/".$file_name);
            }else{                                  //rename the file if another one exist
                $new_dir="user_data/".$file_name.time();
                 rename($file_tmp,$new_dir) ;               
            }
                    
        }else{
                print_r($errors);
        }
        $AptId =76;
        $query="INSERT into apt_photos (photoName, AptID) VALUES('$file_name', '$AptId'); ";

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
    //     $AptId =77;
    //     $query="INSERT into apt_photos (photoName, AptID) VALUES('$file_name', '$AptId'); ";
    // }
}


// if ($conn->query($query) === TRUE) {
//     echo ("good!");
//     //$photoID = $conn->insert_id;

// } else {
//     echo "Error: " . $query . "<br>" . $conn->error;
// }




$query1="SELECT * FROM apt_photos";

if ($conn->query($query1) === TRUE) {
    echo ("good2!");
} else {
    echo "Error: " . $query1 . "<br>" . $conn->error;
}



$count=0;
$source=array();
$j=0;
$result = mysqli_query($conn, $query1);
// print_r(mysqli_fetch_row($result));
$row = mysqli_fetch_row($result);
// echo ("row:");
// echo $row[0];
echo "<br/>";
echo "<br/>";
//print_r(explode("|", $row[0]));
while ($row=$result->fetch_assoc()){
    $source[$j] = $row['photoName'];
    // $source  $row['photoName']);
    // echo $row['photoName'];
    $count++;
    $j++;
}

//print_r($source);

//echo("count: ");
//echo ($count);
//echo count($source);
for($i = 0; $i < $count; $i++){
  // echo ("source[i]:");
   //echo $source[$i];
   echo "<img height='20%' width='20%' src='user_data/$source[$i]'/>";
   echo "<br>";
}

// $query1 = "SELECT  `FILE_NAME` 
// FROM  `apt_photos` 
// WHERE id =29";
// $result = mysql_query($query1);
// //print_r(mysql_fetch_row($result));
// //
// $row = mysql_fetch_row($result);
// echo $row[0];
// echo "<br/>";
// echo "<br/>";
// //print_r(explode("|", $row[0]));
// $source = explode("|", $row[0]);
// //echo count($source);
// for($i = 0; $i < count($source); $i++){
//     echo "$source[$i]";
//     echo "<img height='20%' width='20%' src='user_data/$source[$i]'/>";
// }
?>