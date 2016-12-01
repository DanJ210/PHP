<!DOCTYPE html>
<html>
<!-- I am showing my play code of messing with files which is not required
by the assignment, but only showing. My assignment code will be near the bottom
and distinguised by a comment and a header. I will make it distinguishable. -->
    <head><title>Daniel Jackson - Assignment 8</title>
        <style type="text/css">
        .heading {
            text-align:center;
        }
        #files {
            width:250px;
            height:250px;
            background-color:yellow;
            color:orange;
            text-align:center;
            float:left;
        }
        #folders {
            width:250px;
            height:250px;
            background-color:blue;
            color:white;
            text-align:center;
            float:right;
        }
        </style>
    </head>
    <body>
    <h1 class="heading">I am going to demonstrate working with files and directories.</h1>
    <p>All of this code is my own typed, nothing copied from other
    code files though I did learn from the book and from lecture videos
    nothing was actually copied and pasted from anywhere else.</p>
    </hr>
    <h3 class="heading">Testing reading and writing to a file below here.</h3>
    <?php
    // Extra file if needed to play with. 
    //$file = "../Week10/somefile.csv";
    $newFile = "NewTestFile.csv";
    // Get contents of all files
    $myFile = file_get_contents("../Week10/somefile.csv");
    echo $myFile;
    // Append to a file
    $myFile .= "Orange, Barack, Obama, 2017, Testing5th";
    echo "</br>".$myFile;
    // Write contents back to existing file or coule do a new file.
    file_put_contents($newFile, $myFile);
    ?>

<!-- Below this line is true Assignment 8 code! -->

    <h3 class="heading">I will be working with the directory path below, on my PC.</h3>
    <p>I will then display directories and files seperately below this. 
    This only showing all files and directories I will be listing seperately.</p>
    <?php
    // Setting a file directory
    $dirPath = "C:/Wamp_64/www/PHP/Week10/";
    echo "The directory I'm in is: ".$dirPath;
    // Opening directory path 
    $dir = dir($dirPath);
    // While loops through while there's items in a file and 
    // displays them until it gets to the end of the file.
    while ($file = $dir->read() ) {
        echo $file."</br>";
    }
    // Closing of the directory when done.
    $dir->close();
    ?>
    <!-- Practicing basic file basic file/folder viewing without
    in a very plain and boring way. -->
    
    <h3 class="heading">Listing Directories Seperate from Files</h3>
        <div id="files">
            <h6 class="heading">Listing all files in the folder here.</h6>
            <?php 
            $dirPath = "C:/Wamp_64/www/PHP/Week10/";
            //$dir = dir($dirPath);
            if (!($handle = opendir($dirPath))) die("Cannot open $dir.");
            $files = array();
            while ($file = readdir($handle)) {
                if ($file != "." && $file != ".." ) {
                    if (is_dir($dirPath."/".$file)) $file.="/";
                    $files[]=$file;
                }
            }
            sort($files);
            foreach($files as $file) 
            //My Modification
            if(substr($file,-1) != "/") {
                echo $file."</br>";
            }
            ?>
        </div>
        
        <div id="folders">
        <h6 class="heading">Listing all directories in the folder here.</h6>
        <?php
        foreach($files as $file) {
            if (substr($file, -1) == "/") {
                echo "Directory: ".$file."</br>";
            }
        }
        ?>
        </div>
        <?php 
        // Closing the directory when done
        //$dir->close();
        ?>
    </body>
</html>