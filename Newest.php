<!DOCTYPE html>
<html>
    <head><title>
    </title>
    <style>
    div {height:200px; width:100px; background-color:blue;
    color:white; float:right;}
    </style>
    </head>
    <body>
    <?php
        $fname=$_POST['FName'];
        $lName=$_POST['LName'];
        $gender=$_POST['gender'];

        echo "     Hello".$fname."</br>";
        echo "     Last Name: ".$lName."</br>";
        echo "Gender: ".$gender."</br>";
    ?>
    <p>&nbsp;&nbsp;&nbsp;<?php echo $fname; ?></p>
    <div>
    <p><?php echo $fname; ?></p>
    </div>
    </body>
</html>