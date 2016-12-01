<!DOCTYPE html>
<html>
    <head><title></title></head>
    <body>
    <h2>Writing to a text file</h2>
    <?php

    $fname = "somefile.txt";
    $file = fopen($fname, "w");

    if ($file == false) {
        echo "Error in opening file";
        exit();
    }
    fwrite ($file,"Testing to see if the code,Daniel,Jackson");
    echo filesize($fname);
    echo "</br>";
    echo filetype($fname);
    fclose($file);
    ?>
    
    </body>
</html>