<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <!-- $_POST is a super global function -->
        <h4>Displaying information from form.</h4>
        Clients name entered in form.html is: <?php echo $_POST['clientname']; ?></br>
        Clients age entered in form.html is: <?php echo $_POST['clientage']; ?></br>
        Clients email entered in form.html is: <?php echo $_POST['email']; ?></br>
        Clients email entered in form.html is: <?php echo $_POST['pace']; ?></br>
        Clients email entered in form.html is: <?php echo $_POST['suggestions']; ?></br>
          
        <?php
            $name = "Teste This";
            $five = "Test This";
            $eight = "9";
            $nine = "10";
            $intEight = (int)$eight;
            echo $intEight;
            var_dump($name);
            print_r($name);
            echo $name;
            echo gettype($name);
        ?>
    </body>
</html>