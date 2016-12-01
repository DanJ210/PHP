<html>
    <body>
        
<h2> Extracting data from the table </h2>

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

$sql = "SELECT * FROM OnlineStudents";
$result = $conn->query($sql);

if ($result->num_rows > 0)
   {
    // output data of each row
    while($row = $result->fetch_assoc() ) {
    
    echo "<br> id: ". $row["id"]. " " . $row["Firstname"]. " " . $row["Lastname"]. " " . $row["email"]. " " . $row ["reg_date"]. "<br>" ;
   }
   
   else {
    echo "0 results";
   }
$conn->close();
?>
</body>
</html>