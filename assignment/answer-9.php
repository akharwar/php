<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="radio" name="text" value="prime" >
        <input type="radio" name="text" value="palindrome">
        <input type="radio" name="text" value="check lowercase">
        <input type="radio" name="text" value="reverse string">
        <input type="radio" name="text" value="sort array">
        <input type="submit" name="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $choice = $_POST['text'];
            switch ($choice) {
                case 'prime':
                    include 'answer-9a.php';
                    break;
                case 'palindrome':
                    include 'answer-9e.php';
                    break;
                case 'check lowercase':
                    include 'answer-9d.php';
                    break;
                case 'reverse string':
                    include 'answer-9b.php';
                    break;
                case 'sort array':
                    include 'answer-9c.php';
                    break;
                default:
                    echo "<br><strong>select ny choice</strong><br>";
                    break;
            }
        }
      ?>

</div>

</body>
</html>