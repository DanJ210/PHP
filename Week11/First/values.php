<html>
<h2>Inserting values</h2>
<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "STUDENTS";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO OnlineStudents (Firstname, Lastname, email) VALUES ('Patricia', 'Murphy', 'murphyp@hotmail.com');";
$sql .= "INSERT INTO OnlineStudents (Firstname, Lastname, email) VALUES ('John', 'Dunn', 'dunnj@hotmail.com');";
$sql .= "INSERT INTO OnlineStudents (Firstname, Lastname, email) VALUES ('Patrick', 'Kerry', 'kerryp@yahoo.com');";
$sql .= "INSERT INTO OnlineStudents (Firstname, Lastname, email) VALUES ('Justin', 'Scalon', 'scalonj@daytonastate.edu');";
$sql .= "INSERT INTO OnlineStudents (Firstname, Lastname, email) VALUES ('Kiren', 'Stanley', 'stanleyk@microsoft.net')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</html>