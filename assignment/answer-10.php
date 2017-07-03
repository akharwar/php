<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
        $myfile = fopen('string.txt',"r");
        $fread = fread($myfile,filesize('string.txt'));


        $find = preg_match("/\[.*\]$/",$fread,$match);
        echo "<br>".$find."<br>";
        print_r($match);
        fclose($myfile);
    ?>

</div>

</body>
</html>