<html>
<h2> Reading a file with a different format </h2>
<?php
$fhandle = fopen("somefile.csv", "r");

while (!feof($fhandle))
{
	$lines = fgetcsv($fhandle, 4048);
	
	print $lines[0] . $lines[1]. $lines[2]. $lines[3]. "<br>";
}
fclose($fhandle);

?>


</html>