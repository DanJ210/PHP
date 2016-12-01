<html>
<head> Files in PHP</head>
<body>
<?php
echo "<br\>";
//$file = "C:\wamp\www\sandbox\playingnumbers.php";
//$file = "varialbles.php";
//$file = "C:\\test.txt";

$file = "C:\Windows\System32\at.exe";

/*
echo "<br\>";
$size = filesize($file);
echo $size;
echo "<br>";
echo $file. "\t is " .$size. "\t bytes .<br\>"; 
*/

if (file_exists($file))
{
$size = filesize($file);
echo $size;
echo "<br>";
echo $file. "\t is " .$size. "\t bytes .<br\>"; 
	
}
else
{
	echo $file ."does not exist <br>"; 
}

echo "<hr>";
$dateformt = "D d M Y g: i A";

$accesstime = fileatime($file);
$modifytime = fileatime($file);
$changetime = fileatime($file);

echo $file . "<br> was accessed on ". date($dateformt, $accesstime) . "<br>";
echo $file . "<br> was modified on ". date($dateformt, $modifytime) . "<br>";
echo $file . "<br> was changed on ". date($dateformt, $changetime) . "<br>";

echo "<hr>";

echo $file .(is_readable($file) ? " is " : " is not "). " readable <br>";
echo $file .(is_writable($file) ? " is " : " is not "). " writable <br>";

echo "<hr>";
//$anotherfile = "stringfunctions.php";

//$anotherfile= "C:\Windows\System32\at.exe";

$anotherfile= "Playingnumbers.html";

$afile = fopen($anotherfile, "r");

do
{
  echo fgets($afile) . "<br>";	
	
}
while(!feof($afile));
fclose ($afile);

echo "<hr>";
$secondfile = "class.txt";
$f1 = fopen($secondfile, "a");
$outputfile = "How are we doing so far? This is the last code.". PHP_EOL;
fwrite ($f1, $outputfile);


















?>
</body>
</html>