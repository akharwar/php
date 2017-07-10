<?php
    include 'header.php';

    $id = $_GET['id'];
    $post_content ="";
 //   echo $_SESSION['login_user']; die;

 if(isset($_SESSION['login_user']))
 {
    if(!isset($_POST['submit']))
    {
        $sql = "SELECT * FROM posts
                WHERE post_ID = '$id'";
        $result = mysqli_query($conn,$sql) or die(mysqli_error());

        if (mysqli_num_rows($result)!= 0)
        {
           $post = mysqli_fetch_assoc($result);
        }
    }
    elseif(isset($_POST['submit']))
    {
        $post_content = $_POST['post_content'];
        $sql = "UPDATE posts
                SET post = '$post_content', date_of_post = CURDATE()
                WHERE post_ID ='$id'";
        $result =mysqli_query($conn,$sql) or die(mysqli_error($conn));
        header("Location:home.php");
        exit;
    }
 }
?>
    <div class="row">
        <div class="col-xs-8 col-xs-push-2">
            <fieldset>
                <form method="post" action="" id="edit_form">
                    <div class="form-group">
                        <textarea rows="3" form="edit_form" name="post_content" class="form-control" required>
                            <?php  echo $post['post']; ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary"/>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>

<?php  include 'footer.php'; ?>