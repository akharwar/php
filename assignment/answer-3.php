<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-content">
            <h1>Answer 3: </h1>
            <?php
                $d = "A00";
                for($x = 0; $x < 5; $x++){
                    echo "<br>A0";
                    $d[2] = $d[2]+1;
                    echo $d[2];
                }
            ?>
    </div>
</body>
</html>