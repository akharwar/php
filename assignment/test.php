<!DOCTYPE html>
<html>
<body>

<?php
    $file="temp.txt";

    $fopen = fopen($file, "r");

    $fread = fread($fopen,filesize($file));

    fclose($fopen);

    $remove = ",";

    $split = explode($remove, $fread);

    $array[] = null;
    $tab = "\t";

    foreach ($split as $string)
    {
        $row = explode($tab, $string);
        array_push($array,$row);
    }
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>
</body>
</html>