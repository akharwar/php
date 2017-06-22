<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <?php
        $data = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana","Germany" => "Berlin", "Greece" => "Athens","Ireland"=>"Dublin", "Netherlands"=>"Amsterdam","Portugal"=>"Lisbon", "Spain"=>"Madrid","Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
        asort($data);
        echo "<h1><strong>List of Country with its Capital</strong></h1>";
        foreach ($data as $key => $value) {
            echo "The capital of ".$key." is ".$value.".<br><br>";
        }
        echo "<br><br>";
    ?>

</div>
</body>
</html>