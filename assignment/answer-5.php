<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-content">
            <h1>Answer 5 : upper and lower case</h1>
            <?php
                $Color = array('A'=>'Blue','B'=>'Green','c'=>'Red');
                for($x = 0;$x < 2; $x++)
                {
                    foreach ($Color as $a => $a_value)
                    {
                        if($x == 0)
                        {
                          echo $a."=>".strtolower($a_value)."<br>";
                        }
                        elseif($x == 1)
                        {
                            echo $a."=>".strtoupper($a_value)."<br>";
                        }
                    }
                    echo "<br>";
                }
                print_r($Color);
            ?>
    </div>
</body>
</html>