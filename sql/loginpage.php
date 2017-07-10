
<?php
  include 'header.php';
  if(isset($_SESSION['login_user']))
  {
    header("Location:home.php");
  }
  elseif(!isset($_SESSION['login_user']))
  {
    $Email = $Password = "";

      if(isset($_POST['submit']))
      {
        if(empty($_POST["Email"]))
        {
          echo '<p class="text-center"><strong><i>Email cannot be empty!</i></strong></p>';
        }
        else
        {
          $Email = $_POST["Email"];
          $Password = $_POST["Password"];
          $_SESSION['login_user'] = $Email;
          $sql = "SELECT * FROM user
                  WHERE EmailID = '$Email' ";//and Password = '$password'";
          //echo "<br>".$sql;
          $result = mysqli_query($conn, $sql);
          //echo "<pre>";print_r($result);
          if (mysqli_num_rows($result) > 0)
          {
              $row = mysqli_fetch_assoc($result);
              echo "<br><p> email exist<p><br>";
              if (password_verify($Password, $row["Password"]))
              {
                  echo '<p class="text-center"><strong><i>Password is valid!</i></strong></p>';
                  header("Location:home.php");
              }
              else
              {
                  echo '<p class="text-center" ><br><strong><i>Invalid password.</i></strong></p>';
              }
          }
          else
          {
              echo "<p class='text-center'><strong><i>Error: email does not exist</i></strong></p>";
          }
       }
      }
  }
  ?>

  <div class="row">
    <div class="col-xs-10">
      <div class="col-xs-offset-3 col-xs-6">
        <h1> Login:</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="Email">Email Id:</label>
            <input class="form-control" type="email" name="Email" id="Email" value="<?php echo $Email;?>"/>
        </div>
        <div class="form-group">
            <label for="Password"> Password:</label>
            <input class="form-control" type="password" name="Password" id="Password" value="<?php echo $Password;?>"/>
        </div>
        <input type="submit" name="submit" value="login" class="btn btn-primary">
        <button class="btn"> <a href="/sql/registration.php">registration</a></button>
        </form>
      </div>
    </div>
  </div>
<?php
    include 'footer.php';
?>