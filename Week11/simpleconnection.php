<html>
<h3> Simple connection to database </h3>
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
}
?>
</html>