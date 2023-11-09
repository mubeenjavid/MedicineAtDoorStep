<!-- connecting to the Server and  Database -->
<!-- agr servermethod post ho to hi ap server or database sy connect  -->
<?php
$showAlert=false;
$showAlert2=false;
$showExists=false;
$exists=false;
if($_SERVER["REQUEST_METHOD"]=='POST'){
include('clientdbconect.php');
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$dpassword=$_POST['dpassword'];

// 1sql query likh raha hoo taaky koi same username naa rakh saky
$existsSql="SELECT * FROM`clientsignup` WHERE `user_name`='$user_name'";
$result=mysqli_query($conn,$existsSql);
$numofexists=mysqli_num_rows($result);
if($numofexists>0){
    
    $showExists=true;
    $exists=true;

}

if($password!=$dpassword){

    $showAlert2=true;
    }
if(($password== $dpassword) && $exists==false){
        //password hashing use krny ky liye sb sy pehly to ap ko us ki length database sy 225 krni ho ghi
    //ab us ky  baad jahan py password or confirm password match ho jaty hain us ky baad ap apny sirf khali password ky sath hash built in php ka function daal do
    //is ka 1parameter ho ga hamara password wala variable or 2usra parameter built in keyword PASSWORD_DEFAULT ho ga
    $usinghash= password_hash($password,PASSWORD_DEFAULT);
    // without password_hash y wali query ho gii
    // $sql="INSERT INTO `users123` (`username`, `password`) VALUES ( '$username', '$password')";
    // with password_hash  y wali query ho ghi
    $sql="INSERT INTO `clientsignup` (`user_name`, `password`) VALUES ( '$user_name', '$usinghash')";

    $result=mysqli_query($conn,$sql);
    if($result==true){
        $showAlert=true;
    }
    else{
        echo"<h1 align='Error!</h1>".mysqli_error($conn);
        //agr koi error aya to navbar ky peechy ho ga iss liye inspect kr ky dekhna

    }
}

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

    <title>SignUp-Page</title>
  </head>
  <body>
  <?php
  require("ovrallnavbar.php");
  if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created Now  you can login to our website.
        <strong><a href="clientslogin.php">LOG IN</a></strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
  if($showAlert2){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Listen!</strong> Your Passwords are different Please put the same passwords in both fields.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
  if($showExists){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Not-Allowed!</strong> This User name is already taken. Please try another user name.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
  ?>
  <div class="container my-3">
      <h1 align="center">Sign up to Our Webstie</h1>

      <form action="#" method="post">
        <div class="form-group">
            <label for="user_name">Username</label>
            <input type="text" class="form-control" id="user_name" name="user_name" maxlength="20" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="dpassword">Confirm Password</label>
            <input type="password" class="form-control" id="dpassword" name="dpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password in both fields.</small>
        </div>
         
        <button type="submit" class="btn btn-outline-danger">SignUp</button>
     </form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

