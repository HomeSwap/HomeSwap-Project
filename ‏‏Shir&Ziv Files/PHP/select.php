
<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="database";
	

	$conn=new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error)
	{
		die("connection failed: ".$conn->connect_error);
	}
	
	$sql="SELECT userID, Fname, email FROM users";
	$result=$conn->query($sql);


	if ($result->num_rows>0) 
	{
		echo "<table><tr><th>ID</th><th>Name</th><th>email</th></tr>";
		while ($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row["userID"]."</td><td>".$row["Fname"]."</td><td>".$row["email"]."</td></tr>";
		}
			
		
		echo "</table>";
	}
	else {
    echo  "<br><br>Unfortunately, there are no results found.";
}
	
$conn->close();
?>
