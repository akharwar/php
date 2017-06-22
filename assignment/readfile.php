<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
$myfile = fopen("revie.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("revie.txt"));
fclose($myfile);
?>
/* warning is showing for us only to know where it has gone wrong.
*/
</body>
</html>