<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $arrlength=count($name);
            echo $arrlength."<br>";
            for($x=0;$x<$arrlength;$x++)
              {
                echo "<li> ".$name[$x]." </li>";
                echo "<br>";
              }
            }
            ?>
            <br>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Name:
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                      $arrlength1=count($name);
                      echo $arrlength1;
                      for($x=0;$x<$arrlength1;$x++)
                      {
                        echo "<input type='hidden' name='name[]' value='$name[$x]' />";
                      }
                }
                ?>
                <input type="text" name="name[]" id="textfield"  />
                <input type="submit" name="button" id="button" value="Submit" />
            </form>
            <br>

</div>

</body>
</html>