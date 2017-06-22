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
        fclose($myfile);

        $find = preg_match('/\b\[[a-zA-Z]\]\b/', $fread,$match);
        echo "<br>".$find."<br>";
        echo "<br>".$match."<br>";
        echo "<br>".$match[0]."<br>";
    ?>

</div>

</body>
</html>