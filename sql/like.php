<?php
    include 'connect.php';
    session_start();


    $id = $_POST['post_ID'];
    $count = $_POST['no_of_likes'];
    $new_count = $count;
    $sid = $_SESSION['login_user'];

    if(isset($_SESSION['login_user']))
    {

        $sql = "SELECT * FROM likes
                WHERE post_ID = '$id'"; // get id from some sorce
        $n_likes = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if (mysqli_num_rows($n_likes) > 0)
        {

            while($rlikes = mysqli_fetch_assoc($n_likes))
            {
               // print_r($rlikes);
                if($rlikes['user_ID']==$_SESSION['login_user'])
                {
                    $uid = $rlikes['user_ID'];
                    $sql = "DELETE FROM likes
                            WHERE user_ID = '$uid' AND post_ID = '$id'";
                    $new_count = $count-1;
                    $d_likes=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                }
            }
        }
        if($new_count == $count)
        {
            $check_uid = mysqli_query($conn,"SELECT user_ID FROM posts WHERE post_ID = '$id'");
            $user_of_post = mysqli_fetch_assoc($check_uid);
            if($user_of_post['user_ID'] != $sid)
            {
                $sql = "INSERT INTO likes (post_ID,user_ID,date_of_like)
                        VALUES ('$id','$sid',CURDATE())";
                $a_likes = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                $new_count = $count+1;
            }
        }
        // to maintain NO OF LIKES FOR given post



        $sql = "UPDATE posts
                SET no_of_likes = '$new_count'
                WHERE post_ID = '$id'";
       $u_post = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    }
    echo $new_count;

?>