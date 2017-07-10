<?php
    $count = 0;
    if(isset($_SESSION['login_user']))
    {
        $user_ID = $_SESSION['login_user'];
        $sql = "SELECT * FROM posts
                ORDER BY post_ID DESC ";
        $result = mysqli_query($conn,$sql) or die(mysqli_error());

    ?>
        <fieldset>
            <legend>POST</legend>

            <?php
            if (mysqli_num_rows($result)!= 0)
            {
               while($post = mysqli_fetch_assoc($result))
            {
             ?>
                <div class="col-xs-12">
                    <div class="well">
                        <h6><span>Post NO:</span><span class="pid"> <?php  echo $post["post_ID"]; ?></span></h6>
                        <p>
                            <span class="pull-left"><?php   echo $post["user_ID"]; ?></span>
                        </p>
                        <p>
                            <span class="pull-right"><?php   echo $post["date_of_post"];?></span>
                        </p>
                        <p class="pcontent"><?php   echo $post["post"]; ?></p>

                        <?php   if($user_ID == $post["user_ID"]) : ?>
                            <button class="btn btn-default edit">
                                <a href="edit.php<?php echo '?id='.$post["post_ID"]; ?>">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </button>
                        <?php  endif;
                        echo '<i class="fa fa-heart like_button">
                                <span>'.$post["no_of_likes"].'</span>
                                </i>';
                                ?>
                   </div>
                </div>
    <?php
                $allpost[$post["post_ID"]] = $post;
            }
        }
    ?>
        </fieldset>
    <?php
    }
?>


