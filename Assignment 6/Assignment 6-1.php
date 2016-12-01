<!DOCTYPE html>
<html>
    <head>
        <title>Daniel Jackson - Assignment 6 Part 1</title>
        <style>
            body h2{color:red;}
            body h4{color:orange;}
            #colorkey{text-decoration:underline;}
            div p.Student{width:200px; height:100px;float:left;
            border: 5px solid blue; background-color:white;
            color:red; text-align:center; padding-top:15px;
            background-image:url("logo.png"); font-size:18px;}
        </style>
    </head>
    <body>
        <h1>This program takes in two student forms, but the second one can 
        be left blank. The data will only be displayed in a div box if there
        is data entered for the second student, if the second is left blank
        then no div box will appear.</h1>
        <hr>
        <p><a href="Assignment 6-1.html">Enter Another Student</a></p>
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
            $student1 = new Student($fName, $status, $gpa, $degree);
        
        ?>
        <div>
        <h2>Student Print Outs Below Here</h2>
        <p class="Student">Student: <?php echo $student1->name;?></br>
        Status: <?php echo $student1->status; ?></br>
        GPA: <?php echo $student1->gpa ?></br>
        Degree <?php echo $student1->degree ?></br></p>
        </div>
        
        <?php
        
                $fName2 =$_POST['FName2'];
                $status2 = $_POST['status2'];
                $gpa2 = $_POST['gpa2'];
                $degree2 = $_POST['degree2'];
            /* I have an if statement opening here which only displays a <div>
                tag if the second studen boxes were filled in */
            if ($fName2!=NULL){
                
                $student2 = new Student($fName2, $status2, $gpa2, $degree2);
                
         ?>
            <div>
                <p id="student">
                <p class="Student">Student: <?php echo $student2->name;?></br>
                    Status: <?php echo $student2->status; ?></br>
                    GPA: <?php echo $student2->gpa; ?></br>
                    Degree <?php echo $student2->degree; ?></br>
            </p>
            </div>
        <?php
        /* I"m closing that if statement here */
            }
        ?>
        
        <!--
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