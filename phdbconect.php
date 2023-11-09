<?php
$servername="localhost";
$username="root";
$password="";
$database="fyp";
$conn= mysqli_connect($servername,$username,$password,$database);
if($conn==true){
     //echo"<h1 align='center'>Successfully Connected with server and Database</h1>";
}
else{
    echo"<h1 align='Error!</h1>".mysqli_connect_error($conn);

}

?>