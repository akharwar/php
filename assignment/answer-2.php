<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main-content">
            <?php
                $string1 = $string2 = "";
            ?>

            <h1> Answer 2:</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Sample text:
                <input type="text" name="string1" value="<?php echo $string1;?>">
                <input type="submit" name="submit">
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $string1 = $_POST['string1'];
                    echo "<br>expected string : ";
                    for($x = 0;$x < strlen($string1);$x++)
                    {
                        if($x == 0)
                         color_change($string1[$x]);
                        elseif($string1[$x-1] == " ")
                            color_change($string1[$x]);
                            else
                                echo $string1[$x];
                    }
//        echo preg_replace("/[a-z]/1","<span style='color:red'>/1</span>",$string1);
                }
                function color_change($string2)
                {
                    echo '<span style="color:red;">'.$string2.'</span>';
                }
            ?>
        </div>

    </body>
</html>