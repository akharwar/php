<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
        $myfile = fopen('array.txt',"r");
        $fread = fread($myfile,filesize('array.txt'));
        fclose($myfile);

        $fread = str_replace(' ', '', $fread);
        $seperator = ",";
        $array = explode($seperator, $fread);
        echo "<br><br>";
        print_r($array);
        echo "<br><br>";
        $remove = array(73);
        $count = count($array);


    foreach($array as $key => $value)
    {
        if(in_array($value, $remove)) {
            unset($array[$key]);
        }
    }
    echo "<br><br>";
    print_r($array);
    echo "<br><br>";
    $array = array_values($array);
    print_r($array);
    ?>

</div>

</body>
</html>