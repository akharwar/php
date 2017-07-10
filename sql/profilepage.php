
<?php
    include 'header.php';

    $username = $DOB = $Firstname = $Lastname = $AdmissionNo = "";
    static $Password = "";
    static $Email = "";

    $sql = "SELECT * FROM userdetail
            WHERE EmailID = '".$_SESSION['login_user']."'";
    $detail = mysqli_query($conn,$sql);

    if (mysqli_num_rows($detail) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($detail))
        {
            $username = $row["username"];
            $Firstname = $row["FirstName"];
            $Lastname = $row["LastName"];
            $DOB = $row["DOB"];
            $Email = $row["EmailID"];
            $Password = $row["Password"];
            $AdmissionNo = $row["AdmissionNo"];
        }
    }
    else
    {
        echo "0 results";
    }

    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $DOB = $_POST['DOB'];

        $sql = "UPDATE userdetail
                SET username = '$username',FirstName = '$Firstname', LastName = '$Lastname',DOB = '$DOB'
                WHERE EmailID = '$Email'";
        $result = mysqli_query($conn, $sql);
        if($result != 0)
        {
            echo "changes successfully saved";
        }
        else{
            echo "error:".$sql."<br>".mysqli_error($conn);
        }
    }
?>

<div class="row">
    <div class="col-xs-offset-1 col-xs-10">
      <h3 class="text-center"> PROFILE DATA </h3>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal">
        <div class="form-group">
            <label for="username" class="label-control col-sm-2">USERNAME:</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="username" value=" <?php echo $username;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="Firstname" class="label-control col-sm-2"> FIRSTNAME:</label>
            <div class="col-sm-10">
                <input type="text" name="Firstname" class="form-control" id="Firstname" value="<?php echo $Firstname;?>">
            </div>
        </div>
        <div class="form-group">
            <label for="Lastname" class="label-control col-sm-2"> LASTNAME:</label>
            <div class="col-sm-10">
                <input type="text" name="Lastname" class="form-control" id="Lastname" value=" <?php  echo $Lastname;?>"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 label-control">EMAIL: </label>
            <div class="col-sm-10">
                <p><?php echo $Email;?></p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 label-control">PASSWORD:</label>
            <div class="col-sm-10">
                <p><?php echo $Password;?></p>
            </div>
        </div>
        <div class="form-group">
            <label for="DOB" class="label-control col-sm-2">DOB</label>
            <div class="col-sm-10">
                <input type="date" name="DOB" class="form-control" id="DOB" value="<?php echo $DOB;?>"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 label-control">ADMISSION NO:</label>
            <div class="col-sm-10">
                <p><?php echo $AdmissionNo;?></p>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-push-2">
                <input type="submit" name="submit" class="btn btn-primary" value="submit">
            </div>
        </div>
      </form>
      <div class="row">
        <div class=" col-xs-12 text-center">
            <button class="btn btn-info"><a href="/sql/home.php">home</a></button>
        </div>
      </div>
    </div>
</div>

<?php  include 'footer.php'; ?>