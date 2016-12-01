<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3>Saving the states between pages using urlencode method</h3>
        <?php
        $first = "Phyllis";
        $last = "Jackson";
        //$school => "DSC",
        //$status => "junion");
        
        $query = "fname= ".urlencode($first)."&amp; lname=".urlencode($last);
        //school=$school &amp; status=$status &amp;";
        echo '<p><a href="myinfourl.php? '.$query.' ">My information array</a></p>';
        ?>
    </body>
</html>
