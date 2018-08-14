
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
	
	$sql="SELECT country, city, street FROM apartments";
	$result=$conn->query($sql);


	if ($result->num_rows>0) 
	{
		echo "<table><tr><th>Country</th><th>City</th><th>Street</th></tr>";
		while ($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row["country"]."</td><td>".$row["city"]."</td><td>".$row["street"]."</td></tr>";
		}
			
		
		echo "</table>";
	}
	else {
    echo  "<br><br>Unfortunately, there are no results found.";
}
	
$conn->close();
?>
