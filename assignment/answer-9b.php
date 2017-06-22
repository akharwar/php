<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
        $string = $temp = "";
        function reverse($string)
        {
            $count = strlen($string);
            echo "string lenght: ".$count;
            for($x = 0;$x < ($count/2);$x++)
            {
                $temp = $string[$x];
                $string[$x] = $string[$count-1-$x];
                $string[$count-1-$x] = $temp;

            }

            return $string;
        }
    ?>
    <h1>Answer 9b : reverse function</h1>
    <?php
        $myfile = fopen("string.txt", "r");
        $fread = fread($myfile,filesize("string.txt"));
        fclose($myfile);
        echo "<br>".$fread."<br>";
        $rfread = reverse($fread);
        echo "<br>reverse of above string:<br>".$rfread;
    ?>
</div>

</body>
</html>