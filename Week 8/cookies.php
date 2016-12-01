<!DOCTYPE html>
<html>
    <body>
        <h3>Cookies</h3>
        <?php 
        $numberofvisits = intval($_COOKIE['numberofvisits']);
        
        setcookie('numberofvisits', $numberofvisits+1, 
        strtotime('+1 day'));
        echo $numberofvisits;
        if ($numberofvisits == 0) {
            echo "Hello, never met you before";
        }
        else {
            echo "Welcome back to this website, you have been", $numberofvisits,
            "times before";
        }
        ?>
    </body>
</html>