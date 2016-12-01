<html>
<h2> Displaying directories and files </h2>
<?php
// open the current directory
$handle = opendir('.');
// define an array to hold the files
$files = array();

if ($handle) {
   // loop through all of the files
   while (false !== ($fname = readdir($handle))) {
      // if the file is not this file, and does not start with a '.' or '..',
      // then store it for later display
      if (($fname != '.') && ($fname != '..') &&
          ($fname != basename($_SERVER['PHP_SELF']))) {
          // store the filename
          $files[] = (is_dir( "./$fname" )) ? "(Dir) {$fname}" : $fname;
      }
   }
   // close the directory
   closedir($handle);
}

echo "<select name=\"file\">\n";
// Now loop through the files, echoing out a new select option for each one
foreach( $files as $fname )
{
   echo "<option>{$fname}</option>\n";
}
echo "</select>\n";
?>