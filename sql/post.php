<?php

    $post_content = $post_id = "";

    if(isset($_POST['submit']))
    {
        if(!empty($_POST['post_content']))
        {
            $post_content = $_POST['post_content'];
            $user_ID = $_SESSION['login_user'];

            $sql = "INSERT INTO posts (user_ID,post)
                    VALUES ('$user_ID','$post_content')";
            $result = mysqli_query($conn,$sql) or die(mysqli_error());

            echo "<script>window.location='http://php.local/sql/home.php'</script>";
        }

    }

?>

<fieldset>
    <form id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <textarea rows="3" cols="50" class="form-control" form="form1" name="post_content" placeholder="your views here" required></textarea>
        </div>
        <div class="form-group pull-right">
            <input type="submit" name="submit" value="Post" class="btn btn-success" />
        </div>
    </form>
</fieldset>



