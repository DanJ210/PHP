<html>
<h2> Writing to a file </h2>
<?php
$fname = "..\somefile.txt";
$file = fopen($fname, "w");

if ($file == false)
{
	echo "Error in opening file";
	exit();
}
fwrite($file, "Testing to see if the code is working");
echo filesize($fname);
echo "<br>";
echo filetype($fname);
echo "<br>";
fclose($file);

?>
</html>