<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h3>Saving the states between pages</h3>
        <?php 
        $diff_fields = array(
        $first => "Phyllis",
        $last => "Jackson",
        $school => "DSC",
        $status => "junion");
        
        //$query = "fname=$first &amp; lname=$last &amp;
        //school=$school &amp; status=$status &amp;";
        echo '<p><a href="myinfoarra.php? '.htmlspecialchars(http_build_query($diff_fields)).' ">My information array</a></p>';
        ?>
    </body>
</html>