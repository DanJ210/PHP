<html>
<h3> Simple output of the table created through the script </h3>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db	= "inClass";

$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error)
{
   die("Connection failed: " .$conn->connect_error);
}

$sql = "select * from vehicle";

$result = $conn->query($sql);

//echo $result;

if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		echo "id: ".$row['id']. "Name: ".$row['name']. "Year: ".$row['year']. "<br>";
	}
}
else
{
	echo "no results";
}


$conn->close();
?>
</html>