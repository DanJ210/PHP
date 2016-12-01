<!DOCTYPE html>
<html>
    <head>
        <title>Daniel Jackson - Assignment 5 Part One</title>
    </head>
    <body>
    <h1>The purpose of this code file is to show examples of the 
    concepts of Inheritence, Encapsulation, and Polymorphism.</h1>
    <!-- The class below here is to simulate encapsulation. I am
    using the private keywords to create private members to 
    "encapsulate" any data stored in those members to where they are 
    protected and hidden. I can access their data with public functions
    but I will not create functions that can write over them. 
    
    I use this first page to simulate Inheritence, Encapsulation and 
    slight Polymorphism. My second page also simulates and shows 
    examples of these concepts. -->
        <?php
            class Assignment5 {
                public $name;
                public $subject;
                private $author;
                private $instructor;

                private function get_info(){
                    return $author;
                }

                public function get_users(){
                    $author = $this->get_info();
                    $instructor = $this->instructor;
                    echo $instructor;
                    echo $author;
                }
            }
        /* With this object I am simulating inheritence where the members
        from the class above are inherited below as part of the class or
        object below. I am also creating a new member that can be used which
        is seperate from its above parent class. */
            class Document extends Assignment5 {
                private $documentName;
        /* The function get_users() is what I am using to simulate polymorphism,
        where it is name as the same function above and performs the same exact
        action except it also displays the new private member encapsulated in this 
        class only. */
                public function get_users() {
                    echo $author;
                    echo $instructor;
                    echo $documentName;
                }
            }
        ?>
    </body>
</html>