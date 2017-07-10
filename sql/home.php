<?php    include 'header.php';
   if(!isset($_SESSION['login_user'])) //if not yet logged in
    {
       header("Location: loginpage.php");// send to login page
       exit;
    }

?>

 <div class="row">
  <div class="col-xs-10 col-xs-push-1 text-center">
    <h1>Welcome <?php echo $_SESSION['login_user']; ?></h1>
    <h1><i> Home Page </i></h1>
    <div class="col-xs-offset-3 col-xs-6">
      <table class="table">
        <tbody>
          <tr>
              <td>
                <a href="logout.php">logout</a>
              </td>
          </tr>
          <tr>
            <td>
              <a href="profilepage.php">profile</a>
            </td>
          </tr>
        </tbody>
      </table>
      <?php  include 'post.php'; ?>
    </div>
    <div class="col-xs-12">
      <?php  include 'show_post.php'; ?>
    </div>
  </div>
 </div>

<!--<div class="timeline">
    <p>
        <form>
            <input type="" name="">
        </form>
    </p>
</div>
-->
<?php  include 'footer.php'; ?>