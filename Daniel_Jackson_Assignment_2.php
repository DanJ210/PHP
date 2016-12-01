<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        echo "test";
        function Testing() {
            echo "Hello";
        }
        Testing();
        echo date("D");
        function checkMyVersion() {
            echo "This is the version of PHP that we are using: ". phpversion();
        }
        checkMyVersion();
        ?>
    </body>
</html>