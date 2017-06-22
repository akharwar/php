<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">

    <?php
            $string = "";
            function check_lowercase($string)
            {
                if(preg_match("/[A-Z]/", $string))
                    echo "<i>string is not in lower-case </i><br>";
                else
                    echo "<i>string is in lower-case </i><br>";
            }
      ?>
      <h1>Answer 9d: check lowercase</h1>
    <?php
        $myfile = fopen("string.txt", "r") or die("Unable to open file!");
        $fread = fread($myfile,filesize("string.txt"));
        fclose($myfile);

        check_lowercase($fread);
        print_r($fread);
    ?>
</div>
</body>
</html>