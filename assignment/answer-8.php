<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">

    <?php
//      file open to read file in read mode
        $myfile = fopen("array.txt", "r") or die("Unable to open file!");
        $fread = fread($myfile,filesize("array.txt"));
        fclose($myfile);
//      file close

//      remove space from string
        $fread = str_replace(' ', '', $fread);
        echo "<br><br>".$fread."<br><br>";

//      converting string into array with seperator as ","
        $seperator = ",";
        $split = explode($seperator, $fread);
        $count = count($split);

//      sorting array into assending order
        sort($split);
        echo "<br><br>";

//      calculating average
        $avg = 0 ;
        foreach ($split as $key) {
            $avg = $avg + $key;
        }
        $avg = $avg / $count;

        echo "Average Temperature is :".$avg;
        echo "<br><br>";
        echo "List of seven lowest temperatures :";
        for($x = 0 ; $x < 7; $x++){
            echo $split[$x]." ";
        }
        echo "<br><br>";
        echo "List of seven highest temperatures :";
        for($x = 1; $x < 8; $x++)
        {
            echo $split[($count-$x)]." ";
        }
        echo "<br><br>";
    ?>
</div>

</body>
</html>