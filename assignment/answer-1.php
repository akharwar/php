<html>
    <head>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main-content">
          <?php
            $firstname = $lastname = $count = "";
          ?>
          <h1> Answer 1:</h1>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First name:
            <input type="text" name="firstname" value="ankit"><br>
            Last name:
            <input type="text" name="lastname" value="kharwar"><br>
            <input type="submit" name="submit">
          </form>

          <?php
              if(isset($_POST['submit']))
              {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                echo "Name: ".$firstname." ".$lastname;
              }
          ?>

        </div>
    </body>
</html>