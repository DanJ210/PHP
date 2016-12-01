<html>
<h2> Simple code with MySql Connection </h2>

<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

/*** create a new mysqli object ***/
//$mysqli = @new mysqli($hostname, $username, $password);
$mysqli = mysqli_connect($hostname, $username, $password);

/* check connection */ 
if(!mysqli_connect_errno())
    {
    /*** if we are successful ***/
    echo 'Connected Successfully';

    /*** close connection ***/
    //$mysqli->close();
    }
else
    {
    /*** if we are unable to connect ***/
    echo 'Unable to connect';
    exit();
    }
?>
</html>