<!DOCTYPE html>
<html>
    <head>
        <title>Daniel Jackson - Objects Assignment 4</title>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
        <canvas id="myCanvas"></canvas>
        <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
        <script type="text/javascript" src="main.js"></script>
        <style>
            body h2{color:red;}
            body h4{color:orange;}
            body p{color:blue;} 
            #colorkey{text-decoration:underline;}
        </style>
    </head>
    <body>
        <script type="text/javascript">
            //document.write("")
            var red = [0, 100, 63];
            var orange = [40, 100, 60];
            var green = [75, 100, 40];
            var blue = [196, 77, 55];
            var purple = [280, 50, 60];
            var myName = ("Daniel Jackson");
            var myClass = ("HTML/CSS");
            letterColors = [red, orange, green, blue, purple];
            //alert("Testing");
            drawName(myName, letterColors);
            //drawName(myClass, letterColors);
            bounceBubbles();
        </script>
        <h1>Math Object Blueprint or Class</h1>
        <p>I have one object blueprint with multiple functions or
        members and I can either use only one object to perform everything,
        or I can use multiple objects except I would split the functions up.</p>
        <h1 id="colorkey">Color Coding</h1>
        <p><span style="color:red;">Section Titles are Red</br></span></p>
        <p><span style="color:orange;">Subtitles are Orange</span></p>
        <p><span style="color:blue;">Section explanations blue</span></p>
        <?php 
        class Math {
            function multiplication (...$value) {
                $product = 1;
                foreach($value as $num){
                    $product*=$num;
                }
                return $product;
            }
            function isPrime ($value) {
                if ($value%2==0) {
                    echo "Yes ". $value." is a prime number.</br></br>";
                }
                else {
                    echo "No this is not a prime number with a"."</br>".
                    " remainder of ".($value%2).".</br></br>";
                }
                
            }
        }
        class PrimeMath {
            function isPrime ($value) {
                if ($value%2==0) {
                    echo "Yes ". $value." is a prime number.</br></br>";
                }
                else {
                    echo "No this is not a prime number with a"."</br>".
                    " remainder of ".($value%2).".</br></br>";
                }
                
            }
        }
        class CubedMath {
            function giveCubed (...$value) {
                $count = 1;
                foreach($value as $num) {
                    if($count==1){
                        $synonem="st";
                    }
                    elseif ($count==2) {
                        $synonem="nd";
                    }
                    elseif ($count==3) {
                        $synonem="rd";
                    }
                    else {
                        $synonem="th";
                    }
                    echo "The ".$count.$synonem." number cubed is ".($num*3).
                    "</br>";
                    $count++;
                }
            }
        }
        ?>
        <hr>
        <h2>Creating One Math With Multiple Functions</h2>
        <h4>Multiplication</h4>
        <p>You can give multiple values to be multiplied together.</p>
        <?php 
        $MathArrayOfFunctions = new Math();
        echo $MathArrayOfFunctions->multiplication(8,9)."</br>";
        ?>
        <h4>Using this same object to test prime numbers</h4>
        <p>I can create a seperate object or second object but I can
        use the same one from above for the same function.</p>
        <?php 
        echo $MathArrayOfFunctions->isPrime(5);
        ?>
        <hr>
        <h2>Creating a Second Math Object</h2>
        <h4>Is a number prime or not?</h4>
        <?php 
        $PrimeConductor = new PrimeMath();
        echo $PrimeConductor->isPrime(8);
        echo $PrimeConductor->isPrime(6);
        echo $PrimeConductor->isPrime(19);
        ?>
        <hr>
        <h2>Creating a Third Math Object</h2>
        <h4>Give the cubed values of the numbers given</h4>
        <p>I used a little decision algorithm to determine the
        1st, 2nd or 3rd numbers given. I would have to code the rest
        of the values though for more entries.</p>
        <?php 
        $CubedCruncher = new CubedMath();
        echo $CubedCruncher->giveCubed(8,3,6,4);
        ?>
    </body>
</html>