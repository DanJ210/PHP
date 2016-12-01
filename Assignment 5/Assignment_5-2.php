<!DOCTYPE html>
<html>
    <head>
        <title>Daniel Jackson - Assignment 5 Part 2</title>
    </head>
    <body>
        <h1>This assignment shows interface implementation.</h1>
        <?php
        /* I'm using the example of shapre interfaces from the lecture
        code that Professor Paul created. Below the shape interface, I 
        added my own, Line, which extends Shape to gain its calcArea function. */
        interface Shape {
            public function calcArea();	
        }
        interface Line extends Shape {
            public function calcLength();
        }
        class Circle implements Shape {
            private $radius;
            public function __construct($radius) {
                $this->radius = $radius;
            }
            public function calcArea() {
                return $this-> radius * $this->radius * pi();
            }
        }
        /* The two classes or object blueprints that I adjusted here 
        implement the line interface that I added abvoe where I am only
        using to show as an example, but if I were wanting to calculate
        only the length of one end to another. I also added another class
        called map which would hold the idea of maybe mapping the length
        of roads which was something extra I wanted to add at the last minute. */
        class Rectangle implements Line {
                private $width;
                private $length;
            public function __construct($width, $length,$top) {
                $this->width = $width;
                $this->length = $length;
                $this->top = $top;
            }
            public function calcArea() {
                return $this->width * $this->length ;
            }
            public function calcLength() {
                return $this->top * 18;
            }
        }
        class Square implements Line {
                private $side;
                private $top;
            public function __construct($side,$top) {
                $this->side = $side;   
                $this->top = $top; 
            }
            public function calcArea() {
                return $this->side * $this->side;
            }
            public function calcLength() {
                return $this->top * $this->top;
            }
        }
        class Map implements Line {
            private $roadPoint1;
            private $roadPoint2;
            public function __construct($road1, $road2){
                $this->roadPoint1 = $road1;
                $this->roadPoint2 = $road2;
            }
            public function calcLength() {
                return $this->roadPoint2 - $this->roadPoint2;
            }
        }
        ?>
    <!-- Below here I create only one square object just to similar_text
    the second fucntion. -->
        <?php
        $firstSquare = new Square(8, 10);
        echo $firstSquare.calcArea();
        echo "</br>";
        echo $firstSquare.calcLength();
        echo "</br>";
        ?>
    <!-- Here I am creating an object out of the new Map class that I created
    and implemented the new Line interface I created that also extends the Shape
    interface that Professor Paul created above. I'm only using the one new function
    to calculate the distance of a straight road given the fist point and the second. -->
        <?php
        $mapData1 = new Map(50, 100);
        echo $mapData1.calcLength();
        echo "</br>";
    /* I can also use the calcArea function that was extended from the shape
    interface into my Line interface. */
        echo $mapData1.calcLength();
        echo "</br>";
        ?>
    </body>
</html>