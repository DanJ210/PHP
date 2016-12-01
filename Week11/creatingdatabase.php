<html>
<h3> Simple connection and creation of a database </h3>
<?php
$server = "localhost";
$user = "root";
$password = "";

$conn = new mysqli($server, $user, $password);

if ($conn->connect_error)
{
   die("Connection failed: " .$conn->connect_error);
}
else
{
  echo "Connected successfully to the database";
  echo "<br>";
}

$sqlstatement = "create database inClass";


if ($conn->query($sqlstatement) === TRUE)
{
   echo("Database created through php script");
}
else
{
  echo "Error in creating database:" .$conn->error;
}
?>
</html>