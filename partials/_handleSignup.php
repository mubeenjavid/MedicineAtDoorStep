
<?php

        $showError="false";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '../phdbconect.php';
        // $username=$_POST['user_email'];
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cpass = $_POST['confirm_password'];
        $gender = $_POST['gender'];

        if($password != $cpass) {
            $showError = "Password Does Not Match!";

        }
      

        // check wethet thir email exists
        $existSql= "select * from `users` where email = '$email'";
        $result = mysqli_query($conn, $existSql);
        $numRows = mysqli_num_rows($result);
            if($numRows>0){
            $showError = "Email  already in use";
        }
else {
    
        $hash = password_hash($pass , PASSWORD_DEFAULT);

        $date_created = date('Y-m-d h:i:s');

        $sql="INSERT INTO `users` (`first_name`,`last_name`, `email`, `password`, `gender`, `user_type`, `date_created`)
        VALUES ('$first_name', '$last_name', '$email', '$hash', '$gender', 2, '$date_created')";

        $result = mysqli_query($conn,$sql);

    if($result) {
        $showAlert=true;
        header("Location: /darks/index.php?signupsuccess=true");
        exit();
    }
}
    
    header("Location: /darks/index.php?signupsuccess=false&error= $showError");


}
?>