<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-content">
        <h1>Answer 4:</h1>
        <?php
            $Number = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $Number = $_POST['Number'];
                if($Number > 30)
                    echo $Number." is greater than 30,20 and 10";
                elseif ($Number >20) {
                    echo $Number." is greater than 20 and 10 but less than 30";
                }
                elseif ($Number > 10) {
                    echo $Number." is greater than 10 but less than 30 and 20";
                }
                else
                    echo $Number." is less than 30,20 and 10";
            }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br><br><br>
        Enter the Number :
        <input type="number" name="Number">
        <input type="submit" name="submit"><br>
        </form>
        <?php  echo "<br>   "; ?>
    </div>
</body>
</html>