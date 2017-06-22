<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
            $count = $temp = $array = "";
            function sort_array($array)
            {
                $count = count($array);
                for($x = 0;$x < $count;$x++)
                {
                    for($y = ($x+1); $y < $count; $y++)
                    {
                        if($array[$x] > $array[$y])
                        {
                            $temp = $array[$x];
                            $array[$x] = $array[$y];
                            $array[$y] = $temp;
                            $temp = "";
                        }
                    }
                }
                return $array;
            }
      ?>
      <h1>Answer 9c : Sort function</h1>
      <?php
            $myfile = fopen("array.txt", "r") or die("Unable to open file!");
            $fread = fread($myfile,filesize("array.txt"));
            fclose($myfile);

            $fread = str_replace(' ', '', $fread);
            echo "<br><br>".$fread."<br><br>";

            $seperator = ",";
            $split = explode($seperator, $fread);
            $split = sort_array($split);

            print_r($split);
        ?>
</div>

</body>
</html>