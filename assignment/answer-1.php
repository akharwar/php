<html>
    <head>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main-content">
          <?php
            $firstname = $lastname = $count = "";
              if(isset($_POST['submit']))
              {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
              }
          ?>
          <h1> Answer 1:</h1>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First name:
            <input type="text" name="firstname" value="<?php echo $firstname;?>"><br>
            <br>
            Last name:
            <input type="text" name="lastname" value="<?php echo $lastname;?>"><br><br>
            <input type="submit" name="submit"><br>
          </form>
          <?php
            echo "Name: ".$firstname." ".$lastname;
          ?>


        </div>
    </body>
</html>