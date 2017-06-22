<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <h1>Answer 9e: Palindrome</h1>
    <?php
        $string1 = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            include 'reverse.php';
            function palindrome($string)
            {
                 if(strcmp($string,reverse($string)) == 0)
                    return 1;
                else
                    return 0;
            }

            $string1 = $_POST["string1"];
            echo "<br>";
            if(palindrome($string1) == 1)
                echo "<br>".$string1." is palindrome<br>";
            else
                echo "<br>".$string1." is not a palindrome<br>";
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <input type="text" name="string1" value="<?php  echo $string1;?>">
         <input type="submit" name="submit">
     </form>
</div>
</body>
</html>