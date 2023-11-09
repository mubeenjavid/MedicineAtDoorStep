<!-- connecting to the Server and  Database -->
<!-- agr servermethod post ho to hi ap server or database sy connect  -->
<?php
$showAlert=false;
$showAlert2=false;
if($_SERVER["REQUEST_METHOD"]=='POST'){
include('clientdbconect.php');
$username=$_POST['user_name'];
$password=$_POST['password'];


        // without password_hash y wali query ho ghi
        // $sql="SELECT * FROM `USERS123` WHERE `username`='$username' AND `password`='$password'";
            // with password_hash y wali query ho ghi neechy likhi hui hai password match hony ky baad
        $sql="SELECT * FROM `clientsignup` WHERE `user_name`='$username'";
        // mtlb agr username match ho jaye to fetch assoc sy database mein sy sari password wali values fetch kro agr koi bhi value hamary password_verify jo ky builtin function hai or arguments mein hamara password wala variable or poori password wali row leta hai wo wahan sy check kry ga agr password match ho gaya to agy kaam kry ga warna else mein jaa ky error show krwa dy ga
        $result=mysqli_query($conn,$sql);
        $num= mysqli_num_rows($result);//means agr username of password database mein hain to un ki tadaad kitni hai agr 1 hi account hai to hi login kro agr account hai hi ni means 0 account hai to false error kr do show humy warna agy jany do
        if($num==1){
            while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password,$row['password'])){
            $showAlert=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['user_name']=$user_name;
            header("location:index.php");
        }
        else{
            $showAlert2=true;
     
            }
        }
      
            // with password_hash y wali query ho ghi
        // ab yahan py session laga rahy hain or password jaisy hi from submit ho ga agr account hua bandy ka to wo welcome page py chala jaye ga
        // session_start();
        // $_SESSION['loggedin']=true;// taaky agr session mein login naa ho to y hamary welcome page py new bandon ko naa jany dy iss ki mazeed coding welcome page py hai
        // $_SESSION['username']=$username;
        // // kiss page py bhjna chaty ho wo header mein likho header function ky ander location lazmi likhna
        // header("location:welcome.php");
    }
    else{
       $showAlert2=true;
    //    echo "Error".mysqli_error($result);

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="clientcss.css">
    <title>Login-Page</title>

    <style>
        body{
            background-color:green;
        }
 
.bg::before{
  
    background: url('images/login_page.jpg');
    content:'';
    position:absolute;
    top:0;
    left:0;
    width: 100%;
    height: 700px;
    background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
  opacity: 0.67;
  /* position: relative; */

    
}
.mainDiv{
    position:absolute;
   border:10px inset green;
  top:30%;
  left:8%;
    /* left:110px;
    top:100px; */
   

}
.mainDiv h1{
border-bottom:5px solid green;
margin-bottom:2px;
color:green;
/* background-color:wheat; */
   

}

.dcss{
    margin: auto;
float: right;
}
form label{
    font-weight:bold;
  font-size:22px;
  color:white;
  /* border-bottom:2px solid greeen; */
  border-bottom:5px solid white;


  /* background-color:wheat; */
}
input[type=text]{
  border :4px double green;
  box-shadow:green;


  /* background-color:wheat; */
}

input[type=password]{
  border :4px double green;
  box-shadow:green;


  /* background-color:wheat; */
}

input[type="text"]:: focus { outline-color: orange; 
background-color:green;
} 
    </style>
</head>

<body>
    <?php
//   require("ovrallnavbar.php");
  if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> We found your account You can logged in .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
  
  if($showAlert2){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Your account Not Found.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
  
  ?>
  <div class='bg'>
      <div class="container  mainDiv">
        <h1 align="center">Login to Our Webstie</h1>

        <form action="#" method="post" >
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" class="form-control" id="user_name" name="user_name" maxlength="20"
                    aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>


            <button type="submit" class="btn btn-outline-success dcss mb-3">Login</button>
            </form>
       
        <button type="submit" class="mx-3 btn btn-outline-danger dcss mb-3" onclick="location.href='clientsignup.php'">Create New
            Account</button>
    </div>

    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>