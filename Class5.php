<!DOCTYPE html>
<html>
    <head>
        <title>Class/Week 5</title>
    </head>
    <body>
        <h3> Week 5 Objects </h3>
        <?php
        class KeepingItSimple {
            
        }
        $first= new KeepingItSimple();
        print_r($first);
        echo "</br>";
        echo gettype($first);
        ?>
        
        <?php 
        class People {
            public $name = "noname";
        }
        
        $firstPerson = new People();
        $secondPerson = new People();
        $thirdPerson = new People();
        
        $firstPerson->name;
        $secondPerson->name="tim";
        $thirdPerson->name="Jessica";
        
        echo $firstPerson->name;
        echo "</br>";
        echo $secondPerson->name;
        echo "</br>";
        echo $thirdPerson->name;
        
        ?>
        
        <?php
        
        class SystemInfo {
            private function get_date() {
                return date ("y/m/d");
            }
            private function getVersionOfPhp() {
                return phpversion();
                //return php_ini_loaded_file();
            }
            public function getInformation() {
                $date = $this->get_date();
                $version = $this->getVersionOfPhp();
                
                echo "Todays date is: ".$date."</br>";
                echo "We are using the version ".$version."</br>";
            }
        }
        $mySystem = new SystemInfo();
        $myNewSystem = new SystemInfo();
        $mySystem->getInformation();
        //$myNewSystem->getInformation();
        
        ?>
        
        <?php 
        class myClass {
            
            function first() {
                return true;
            }
            function second() {
                return true;
            }
        }
        $classObject = get_class_methods('myClass');
        $classObject1 = get_class_methods(new myClass());
        
        foreach($classObject as $x) {
            
            echo $x. "</br";
            
        }
        echo "</br>"."</br>";
        foreach($classObject1 as $y) {
            echo $y."</br>";
            
        }
        ?>
        <hr>
        <?php 
        class Sound {
            function _construct() {
                echo "Some sound object is created"."</br>";
            }
            
            function differentSound($bark) {
                echo "Some sound object is created $bark "."</br>";
            }
        }
        //$newSound = new Sound();
        $bark = new Sound;
        $bark->differentSound("Woof Woof");
        echo "test";
        //echo $bark;
        //echo $newSoundBark;
        ?>
        
        <hr>
        <?php 
        class Math {
            function addition (...$value) {
                $sum = 0;
                foreach($value as $num){
                    $sum+=$num;
                }
                return $sum;
            }
        }
        $first = new Math();
        $first->addition();
        echo "<br>";
        echo $first->addition(1,2,3);
        echo "</br>";
        
        echo $first->addition(55,42);
        echo "<br>";
        ?>
        <hr>
        
        
        <?php 
        class Math1 {
            function addition() {
                $sum = 0;
                $args = func_get_args();
                if (empty($args)){
                    return 0;
                }
                foreach($args as $num){
                    $sum+=$num;
                }
                return $sum;
            }
        }
        $second = new Math1();
        $second->addition();
        echo "<br>";
        echo $second->addition(1,2,3);
        echo "</br>";
        
        echo $second->addition(55,42);
        echo "<br>";
        echo $second->addition(994,27,35,5,88);
        echo "<br>";
        ?>
        <hr>
        <?php 
        class Student {
            public $name;
            public $status;
            
            function __construct($name, $status) {
                $this->name = $name;
                $this->status = $status;
            }
            function __toString(){
                return "Student: $this->name, Status: $this->status"."</br>";
            }
            
        }
        $student1 = new Student("Jessica", "Junior");
        $student2 = new Student("Troy", "Senior");
        
        echo $student1;
        echo $student2;
        
        
        
        ?>
    </body>
</html>