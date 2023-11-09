<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../phdbconect.php';
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $sql= "select * from `users` where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        // echo '<pre>'; print_r($row); exit;
        if(password_verify($pass, $row['password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['user_type'] = $row['user_type'];
            //echo "logged in". $email;
        } 
        
        header("Location: /darks/user_profile.php");  
    }
    header("Location: /darks/index.php");  
}