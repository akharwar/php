<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
        $number1 = 1;
        function prime_no($number1)
        {
            for($x = 2;$x < $number1; $x++)
            {
                if(($number1 % $x) == 0)
                {
                    break;
                }
            }

            if($x == $number1)
            {
                echo $number1." is prime number<br><br>";
            }
            else{
                echo $number1." is  not prime number <br><br>";
            }

            if($number1 == 1)
            {
                echo $number1." is prime number<br><br>";
            }
        }
     ?>
     <h1>Answer 9a: prime number function </h1>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <input type="number" name="number1" value="0">
         <input type="submit" name="submit">
     </form>

     <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $number1 = $_POST["number1"];
            echo "<br>";
            prime_no($number1);
        }
    ?>

</div>
</body>
</html>