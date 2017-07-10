
<?php
    include 'header.php';
    if(isset($_SESSION['login_user'])) //if not yet logged in
    {
       echo "<p class='text-center'>Already registered</p>";
       header("Location: home.php");// send to login page
       exit;
    }

    $username = $Password = $DOB = $Firstname = $Lastname = $Email = "";
      if(isset($_POST['submit']))
      {
        $username = $_POST['username'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $DOB = $_POST['DOB'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $cPassword = password_hash($Password, PASSWORD_DEFAULT);
        $_SESSION['login_user']=$Email;

        $sql = "INSERT INTO userdetail (username,FirstName, LastName, DOB, EmailID, Password)
                VALUES ('$username','$Firstname','$Lastname','$DOB','$Email','$cPassword')";
        $result = mysqli_query($conn, $sql);
        $sql = "INSERT INTO user (EmailID,Password,created_at)
                VALUES ('$Email','$cPassword',CURDATE())";
                mysqli_query($conn,$sql);
        if($result != 0)
        {
            echo "registration success";
            header("Location: /sql/loginpage.php");
        }
        else{
            echo "error:".$sql."<br>".mysqli_error($conn);
        }

      }
?>

<div class="row">
    <div class="col-xs-10">
      <div class="col-xs-offset-1 col-xs-10">
        <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="username" class="col-sm-2 label-control">
                    username:
                </label>
                <div class="col-sm-10">
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="Firstname" class="col-sm-2 label-control">
                    First Name:
                </label>
                <div class="col-sm-10">
                    <input type="text" name="Firstname" id="Firstname" class="form-control" value="<?php echo $Firstname;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="Lastname" class="col-sm-2 label-control">
                    Last Name:
                </label>
                <div class="col-sm-10">
                    <input type="text" name="Lastname" id="Lastname" class="form-control" value="<?php echo $Lastname;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="DOB" class="col-sm-2 label-control">
                    Date Of Birth:
                </label>
                <div class="col-sm-10">
                    <input type="date" name="DOB" id="DOB" class="form-control" value="<?php echo $DOB;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="Email" class="col-sm-2 label-control">
                    Email Address:
                </label>
                <div class="col-sm-10">
                    <input type="email" name="Email" id="Email" class="form-control" value="<?php echo $Email;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="Password" class="col-sm-2 label-control">
                    Password:
                </label>
                <div class="col-sm-10">
                    <input type="password" name="Password" id="Password" class="form-control" value="<?php echo $Password;?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-push-2">
                    <input type="submit" name="submit" class="btn btn-primary" value="Register">
                </div>
            </div>
        </form>
      </div>
    </div>
</div>

<?php  include 'footer.php'; ?>