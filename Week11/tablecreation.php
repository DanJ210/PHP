<html>
<h3> Simple table creation with script </h3>
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

$sql = "create table vehicle (id int unique not null, name varchar(40), year varchar(50), primary key (id) )";

if ($conn->query($sql) === TRUE)
{
   echo("table created through php script");
}
else
{
  echo "Error in creating table:" .$conn->error;
}

?>
</html>