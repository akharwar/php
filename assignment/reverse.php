<?php
        $string = $temp = "";
        function reverse($string)
        {
            $count = strlen($string);
            echo "string lenght: ".$count;
            for($x = 0;$x < ($count/2);$x++)
            {
                $temp = $string[$x];
                $string[$x] = $string[$count-1-$x];
                $string[$count-1-$x] = $temp;

            }

            return $string;
        }