<!DOCTYPE html>
<html>
    <head><title></title></head>
    <body>
    <h2>Reading a file with a different format</h2>
    <?php 
    $fhandle = fopen("database.csv","r");
    while (!feof($fhandle)) {
        $lines = fgetcsv($fhandle, 4048);
        print $lines[0].$lines[1].$lines[2]."</br>";
    
    }
    fclose($fhandle);
    ?>
    </body>
</html>