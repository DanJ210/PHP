<!DOCTYPE html>
<html>
    <head><title></title></head>
    <body>
    <?php 
    $dirPath = "C:/Wamp_64/www/PHP/Week10/";
        function traverseDir($dir) {    
            if (!($handle = opendir($dir))) die("Cannot open $dir.");
            $files = array();
            while ($file = readdir($handle)) {
                if ($file != "." && $file != ".." ) {
                    if (is_dir($dir."/".$file)) $file.="/";
                    $files[]=$file;
                }
            }
            sort($files);
            foreach($files as $files) echo $file;
             foreach ( $files as $file ) {    
                 if ( substr( $file, -1 )  == “/” ) {
                     traverseDir("$dir/".substr($file,0,-1));
                 } 
    ?>
    </body>
</html>