<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
        </style>
    </head>
    <body>
    
    <?php 
    define ( "PAGE_SIZE", 10);
    $start = 0;

    if ( ISSET( $_GET["start"] ) and $_GET["start"] >= 0 and $_GET["start"] <=
    1000000 ) {
        $start = (int) $_GET["start"];
        /* Testing where github is uploading 
        
        Making sure github is commiting correctly */
    }
    ?>
    </body>
</html>