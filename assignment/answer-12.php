<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
        $array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

        echo "<br><br>ascending order sort by value <br><br>";
        asort($array);
        print_r($array);
         echo "<br><br>ascending order sort by key<br><br>";
         ksort($array);
        print_r($array);
         echo "<br><br>descending order sort by value<br><br>";
         arsort($array);
        print_r($array);
         echo "<br><br>descending order sort by key<br><br>";
         krsort($array);
        print_r($array);
        echo "<br><br>";
      ?>

</div>
</body>
</html>