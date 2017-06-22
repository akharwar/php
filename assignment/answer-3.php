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
            $element = $count = "";
              if(isset($_POST['submit']))
              {
                $count = $_POST["count"];
                $element = $_POST["element"];

              }
              ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                element value:
                <input type="text" name="element" value="<?php echo $element;?>"><br>
                count:
                <input type="number" name="count" value="<?php echo $count;?>"><br>
                <input type="submit" name="submit">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    for($x = 0; $x <$count; $x++)
                    {
                        echo "<li>".$element."</li>";
                        $element++;
                    }
                 }
            ?>
    </div>
</body>
</html>