<link rel="stylesheet" href="ordercss.css">
<?php

require_once("signup/config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:search.php"); 
}

$user_id=$_SESSION["user_id"];
// print($_SESSION["user_id"]);exit;
?>




<h1 class="" align ='center' >Add To Cart</h1>
<?php

    $id = $_GET['link'];

$name = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";



$sql = "SELECT * FROM med_reg WHERE med_id='$id'";

$result = mysqli_query($dbc, $sql);
$name = "";
$price = "";
    while($row = mysqli_fetch_array($result)){
   $name = $row['med_id'];
   $price = $row['md_price'];
    }
    $sql2 = "INSERT INTO cart (customer_id, product_id, price, quantity) VALUES ('$user_id', '$name', '$price', '1')";
    mysqli_query($dbc, $sql2);
    
?>