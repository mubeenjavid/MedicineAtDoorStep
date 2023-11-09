<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){//means agr koi account ni bnaye ga to session tk ni ponchy ga or agr session ni ho  ga to usy login page py bhj dia jaye ga
 exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="clientcss.css">

    <title>Welcome Mr/Mrs. <?php echo $_SESSION['user_name'];?></title>
  </head>
  <body>
  <?php
  require("_nav.php");
  ?>



  <!-- taaky agr koi user aye to mahol zara acha nazar aye -->
<div class="container my-3">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome - <?php echo $_SESSION['user_name']?></h4>
  <p>Hey how are you doing? Welcome to medicine at doorstep. You are logged in as <?php echo $_SESSION['user_name']?>Nice to talk with You</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to logout <button class="btn btn-outline-danger dlink" onclick="location.href='/darks/clientlogout.php'"> Logout</button></p>
  <p class="mb-0">back to home  <button class="btn btn-outline-danger dlink" onclick="location.href='index.php'"> Home</button></p>
</div>
</div>';
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

