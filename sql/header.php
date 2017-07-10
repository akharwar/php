
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php
            include 'connect.php';
            if(!isset($_SESSION)) // if the session not yet started
            {
              session_start();
            }
            // if(!isset($_SESSION['login_user'])) //if not yet logged in
            // {
            //   header("Location: loginpage.php");// send to login page
            //   exit;
            // }
          ?>