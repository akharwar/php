<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
        include 'reverse.php';
        function palindrome($string)
        {
            if(strcmp($string,reverse($string)) == 0)
                return 1;
            else
                return 0;
        }
      ?>
    <h1>Answer 9e: Palindrome</h1>
    <?php
        $myfile = fopen("string.txt", "r");
        $fread = fread($myfile,filesize("string.txt"));
        fclose($myfile);
        echo "<br>".$fread."<br>";
        if(palindrome($fread) == 1)
        echo "<br>".$fread."<br> is palindrome<br>";
        else
            echo "<br>".$fread."<br> is not a palindrome<br>";
    ?>
</div>
</body>
</html>