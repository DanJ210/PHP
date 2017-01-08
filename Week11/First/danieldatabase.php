<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN”
“http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en” lang=”en”>
    <head>
        <title>Daniel Jackson - Assignment 9-1</title>
    </head>
<body>
    <h1>Making a database connection.</h1>
    <?php 
    /* The statement mysql:host=localhost is unecessary as this 
    is what's default, I only typed it to burn it into my head 
    and use this as a reference in the future, sort of like notes. 
    */ // I ended up taking the above statement out as it threw
       // an error, so I had to remove.
    $dsn = "mysql:dbname=florida_recycling";
    $username = "root";
    $password = "420jedis";
    
    
    try {
        // Connection made and set to a variable.
        $conn = new PDO($dsn, $username, $password);
        // Setting up error catching setting PDO object's error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $connectionError){
        echo "Connection Failed: ".$connectionError->getMessage();
    }
    //Reading data after connection made successfully.
    $sql = "select * from customer_info";

    echo "<ul>";
    try {
        $rows = $conn->query($sql);
        foreach($rows as $row){
            echo "<li>A ".$row["customerID"]. " is ";
            echo $row["firstName"]."</li>";
        }
    } catch (PDOException $readingError) {
        echo "Query Failed With: ".$readingError->getMessage();
    }
    echo "</ul>";
    // Closes the PDO object or the connection. 
    $conn = null;
    ?>
</body>
</html>