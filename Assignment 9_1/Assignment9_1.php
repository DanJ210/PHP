<!-- Assignment 9 - Daniel Jackson - Second Database Creation

I'm including the three doctype statements in all
of my HTML scripts from now on as a good practice of standard. -->
<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN”
“http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en” lang=”en”>
    <head>
        <title>Daniel Jackson - Assignment 9_1 - Database Creation</title>
    </head>
    <body>
        <h1>Using Second Database for Department/Building Creqtion</h1>
        <?php 
        $dsn = "mysql:dbname=building";
        $host = "localhost";
        $userName = 'root';
        $password = '420jedis';


        // Making an SQLI object but I use a PDO below that and
        // throughout this script.
        $mysqli = mysqli_connect($host,$userName,$password);
        /* Borrowed code that I liked, let's me know if connection
        is successful or not. */
        if(!mysqli_connect_errno())
        {
            /*** if we are successful ***/
            echo 'Connected Successfully'."</br>";

            /*** close connection ***/
            //$mysqli->close();
        }
        else
        {
            /*** if we are unable to connect ***/
            echo 'Unable to connect'."</br>";
            exit();
        }

        // Making a PDO object for one query that retrieves all lastnames
        // of 'Jackson' and no one else's.'
        ?>
        <h4>Performing a query for the lastnames of 'Jackson' only</h4>
        <?php
        try {
            $connectionPDO = new PDO($dsn,$userName,$password);
            $connectionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $connectionError) {
            echo "Connection Failed: ".$connectionError->getMessage();
        }

        $sql = "select * from employee where lastname='Jackson'";

        try {
            $data = $connectionPDO->query($sql);
            foreach($data as $lastNames) {
                echo "Lastname: ".$lastNames["LastName"]."</br>";
            }
        } catch (PDOExeption $readingError) {
            echo "Query Failed With: ".$readingError->getMessage();
        }
        // Closing Connections
        $connectionPDO = null;
        $mysqli = null;
        ?>

        <!-- Performing a second query -->
        <h4>Adding a value to the employee table</h4>
        <?php
        // Creating a new connection.
        $connInsertingData = new PDO($dsn,$userName,$password);

        // Trying a complicated inserting into a complex database.
        $sqlInsert = "INSERT INTO Employee VALUES ('6',Paul','Anindya',
        'aPaul@somwhere.com','1234567890','1')";
        $data = $connInsertingData->query($sqlInsert);

        // Using a second sql query to check the table data.
        // Also using 'AND' to select data from the table.
        $newSQL = "select * from Employee where EmployeeID != 5
        AND LastName != 'Jackson'";

        $dataCheck = $connInsertingData->query($newSQL);
        //echo"Testing";
        //echo $dataCheck["FirstName"];
        foreach($dataCheck as $record) {
            //echo "Test";
            echo $record["FirstName"]."</br>";
        }
        // Closing connection.
        $connInsertingData = null;
        ?>
    </body>
</html>