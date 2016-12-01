<html>
<h3> Adding values to the table </h3>
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

$sql = "insert into vehicle (id, name, year) 
values (11, 'Honda', 2014);";
$sql .= "insert into vehicle (id, name, year) 
values (2, 'Acura', 2015);";
$sql .= "insert into vehicle (id, name, year) 
values (3, 'Toyota', 2014);";
$sql .= "insert into vehicle (id, name, year) 
values (4, 'Chevy', 2013);";
$sql .= "insert into vehicle (id, name, year) 
values (5, 'Dodge', 2014);";

if ($conn->multi_query($sql) === TRUE)
{
   echo("New records created successfully");
}
else
{
  echo "Error in creating new records:" .$conn->error;
}

?>
</html>