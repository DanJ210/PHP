<html>
<h2> Deleting directories </h2>
<?php
function deleteDir($dir) {
   // open the directory
   $dhandle = opendir($dir);

   if ($dhandle) {
      // loop through it
      while (false !== ($fname = readdir($dhandle))) {
         // if the element is a directory, and
         // does not start with a '.' or '..'
         // we call deleteDir function recursively
         // passing this element as a parameter
         if (is_dir( "{$dir}/{$fname}" )) {
            if (($fname != '.') && ($fname != '..')) {
               echo "<u>Deleting Files in the Directory</u>: {$dir}/{$fname} <br />";
               deleteDir("$dir/$fname");
            }
         // the element is a file, so we delete it
         } else {
            echo "Deleting File: {$dir}/{$fname} <br />";
            unlink("{$dir}/{$fname}");
         }
      }
      closedir($dhandle);
    }
   // now directory is empty, so we can use
   // the rmdir() function to delete it
   echo "<u>Deleting Directory</u>: {$dir} <br />";
   rmdir($dir);
}

// call deleteDir function and pass to it
// as a parameter a directory name
deleteDir("temporary");
?>
</html>
