<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <h1>Answer 7:</h1>
    <?php
        $range = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $range = $_POST['Number'];

            $myfile = fopen("array.txt", "r") or die("Unable to open file!");
            $fread = fread($myfile,filesize("array.txt"));
            fclose($myfile);

            $fread = str_replace(' ', '', $fread);
            $seperator = ",";
            $array = explode($seperator, $fread);
            $count = count($array);
            $a = array_combine(range($range,($range+$count-1)),$array);
            print_r($a);
/*          foreach ($array as $key => $value) {
                $newarray[$key +20] = $value;
            }
            echo "<br><br>";
            print_r($newarray);
*/
        }
    ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br><br><br>
        Enter the start of index :
        <input type="number" name="Number">
        <input type="submit" name="submit"><br>
        </form>
</div>

</body>
</html>