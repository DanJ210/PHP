﻿<!DOCTYPE html>
<html>
    <head>
        <title>Daniel Jackson - Objects Part 2 Assignment 4</title>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
        <canvas id="myCanvas"></canvas>
        <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
        <script type="text/javascript" src="main.js"></script>
        <style>
            body h2{color:red;}
            body h4{color:orange;}
            #colorkey{text-decoration:underline;}
            div p.Student{width:200px; height:100px;float:left;
            border: 1px solid green; background-color:black; color:white;}
            
        </style>
    </head>
    <body>
        <hr>
        <!--
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
        -->
        <?php 
        class Student {
            /*
            public $name;
            public $status;
            */
            function __construct($name, $status, $gpa, $degree) {
                $this->name = $name;
                $this->status = $status;
                $this->gpa = $gpa;
                $this->degree = $degree;
                
            }
            function __toString(){
                return "Student: $this->name, Status: $this->status ".
                "GPA: $this->gpa, Degree: $this->degree"."</br>";
            }
        }
        /*
        $student1 = new Student("Jessica", "Junior", 4.0, "A.A.");
        $student2 = new Student("Troy", "Senior", 3.8, "B.S.");
        $student3 = new Student("Daniel","Sophomore", 4.5, "A.S.");
        $student4 = new Student("Jamie", "Freshman", 3.2, "Null");
        $student5 = new Student("Robert", "Graduate", 3.5, "M.S.");
        $student6 = new Student("Gary", "Graduate", 3.8, "pHd");
        */
        ?>
        </br></br><hr>
        <?php 
            $fName = $_POST['FName'];
            $status = $_POST['status'];
            $gpa = $_POST['gpa'];
            $degree = $_POST['degree'];
            echo $fName;
            $student1 = new Student($fName, $status, $gpa, $degree);
        
        ?>
        <div>
        <h2>Student Print Outs Below Here</h2>
        <p class="Student">Student: <?php echo $student1->name;?></br>
        Status: <?php echo $student1->status; ?></br>
        GPA: <?php echo $student1->gpa ?></br>
        Degree <?php echo $student1->degree ?></br></p>
        </div>
        <!--
        <div>
        <p class="Student">Student: <?php echo $student2->name;?></br>
        Status: <?php echo $student2->status; ?></br>
        GPA: <?php echo $student2->gpa ?></br>
        Degree <?php echo $student2->degree ?></br></p>
        </div>
        <div>
        <p class="Student">Student: <?php echo $student3->name;?></br>
        Status: <?php echo $student3->status; ?></br>
        GPA: <?php echo $student3->gpa ?></br>
        Degree <?php echo $student3->degree ?></br></p>
        </div>
        <div>
        <p class="Student">Student: <?php echo $student4->name;?></br>
        Status: <?php echo $student4->status; ?></br>
        GPA: <?php echo $student4->gpa ?></br>
        Degree <?php echo $student4->degree ?></br></p>
        </div>
        <div>
        <p class="Student">Student: <?php echo $student5->name;?></br>
        Status: <?php echo $student5->status; ?></br>
        GPA: <?php echo $student5->gpa ?></br>
        Degree <?php echo $student5->degree ?></br></p>
        </div>
        -->
    </body>
</html>