<html>
<h2>Creating Database and tables </h2>    
    
<?php
$dsn = "mysql:dbname=studenti";
$hostname = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($hostname, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE STUDENTS";
if ($conn->query($sql) === TRUE) {
    echo "Student database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>
    
</html>
