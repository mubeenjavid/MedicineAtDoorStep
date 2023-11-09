<?php
require_once("signup/config.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$medicine_name = $_POST['medicine_name'];
$qty = $_POST['qty'];
$address = $_POST['address'];
$medicine_price = $_POST['medicine_price'];
$pharrmacy = $_POST['pharrmacy'];
$medicine_formula = $_POST['medicine_formula'];
$total = $_POST['total'];

$sql = "INSERT INTO order_now (medicine_name, qty, addres, medicine_price, pharrmacy, medicine_formula, total) 
        VALUES ('$medicine_name', '$qty', '$address', '$medicine_price', '$pharrmacy', '$medicine_formula', '$total')";

if ($conn->query($sql) === TRUE) {
      header("Location: orderplaced.html");
      exit(); 
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
