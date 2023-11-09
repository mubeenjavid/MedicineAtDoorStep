<?php
session_start();

echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="btn btn-outline-primary me-2" aria-current="page" href="index.php">Medicine At DoorStep</a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item me-2">
        
        <a class="btn btn-outline-danger" aria-current="page" href="index.php">Home</a>
     
      <li class="nav-item me-2">
      
      </li>
     
     
      
    <li class="nav-item me-2">
   
    <a class="btn btn-outline-success"  href="signup/account.php">Pharmacy Panel</a>
      
    </li>

      <li class="nav-item">
   
      <a class="btn btn-outline-warning"  href="contact.php">Contact</a>
        
      </li>
    </ul>
    <div class="mx-2"> ';

  if(isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] = true)
  {
      echo'<form action="search.php" method="post" class="d-flex">
      <input type="text" class="form-control me-2" name="med" placeholder="Search"
      aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
      <p class="text-light my-0 mx-2"> Welcome '. $_SESSION['email']. ' </p>
      <a href="partials/_logout.php" class="btn btn-outline-success ml-cg2">Logout</a>
      </form> ';
          
  }
  else {
        echo'
          <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#loginmodel">Login</button>
            <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupmodel">Signup</button>
    
      </div> 
        <div class=" mx-2">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          
        </form>';
  }
 
  echo '</div>
</div>
</nav>';
include '../darks/partials/_loginmodel.php';
include '../darks/partials/_signupmodel.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
{
  echo'
  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
<strong>Success!</strong> You can know login
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}
else{
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false")
  {
      echo'
      <div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
    <strong>Opps!</strong> You cannot  login please try again
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
  }

}
?>