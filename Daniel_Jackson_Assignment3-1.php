<!DOCTYPE html>
<html>
    <head><title>Assignment 3-1</title></head>
    <body>
        <h1>Daniel Jackson Assignment 3-1</h1>
        <h2>This assignment or program is meant to show only a few of the</br>
        many functions that belong to a string class or object.</h2>
        <?php 
        $thisString = "It is becoming increasingly clear that we are 
        responsible for warming of the Earth primarily due to the burning 
        of fossil fuels. Predicting the implications of this or how the 
        picture will change in the future are big challenges for scientists
        and today's report by the IPCC, whilst recognising uncertainties, 
        gives us the best possible insight into what may lay ahead.";
        ?>
        <h1>This is the original String I started with and used throughout</h1>
        <?php 
        echo $thisString."<br>";
        ?>
        
        <hr>
        <h3>This string function will shuffle the entire string randomly
        each time it is ran.</h3>
        <?php
        /* This string shuffle function will take a variable that holds
        a string no matter the length and will shuffle the entire thing.*/
        $shuffle = str_shuffle($thisString);
        echo $shuffle."</br>";
        //echo $thisString;
        ?>
        <h3>This string function will take a string and return its MD5 hash code</h3>
        <?php 
        $stringMD5 = md5($thisString);
        echo $stringMD5;
        ?>
        <h3>This will take the string and convert all it's binary values</br>
        to hexadecimal values which is pretty neat. Tho it comes out very long.</h3>
        <?php 
        $bin2hex = bin2hex($thisString);
        //$bin2hex = wordwrap($bin2hex, 50);
        echo $bin2hex;
        ?>
        <h3>This is a boring one but necessary sometimes, I left class early but</br>
        this was probably shown in class, turns a string into all UPPERCASE.</h3>
        <?php 
        $allUppercase = strtoupper($thisString);
        echo $allUppercase;
        ?>
        <h3>Same as the above but changes the string to ALL lowercase</h3>
        <?php
        $allLowercase = strtolower($thisString);
        echo $allLowercase;
        ?>
        <h3>This one will reverse the string from end to beggining.</h3>
        <?php 
        $reversed = strrev($thisString);
        echo $reversed;
        ?>
        <hr>
        <h2>And one extra for good measure.</h2>
        <hr>
        <h3>This method will repeat a string for a set number of times</br>
        which I have set to do 3 times.</h3>
        <?php 
        $repeated = str_repeat($thisString, 3);
        echo $repeated;
        ?>
    </body>
</html>