<link rel="stylesheet" href="ordercss.css">
<h1 class="" align ='center' >Order Now</h1><?php
require_once("signup/config.php");

if(!isset($_SESSION["login_sess"])) 
// {
//     // header("location:search.php"); 
// }
$user_id=$_SESSION["user_id"];

// // print_r($user_id);exit;
// // $servername = "localhost";
// // $username = "root";
// // $password = "";
// // $dbname = "fyp";
// // $conn = new mysqli($servername, $username, $password, $dbname);

// $sql= "SELECT * FROM 'cart' where customer_id = $user_id";
// $result = mysqli_query($dbc, $sql);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";
// $user_id=$_SESSION["user_id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT product_id, price,customer_id, sum(quantity) as qty, users.first_name, med_reg.med_name, med_reg.med_formula, med_reg.med_id, med_reg.pharmacy_id FROM cart join users on cart.customer_id = users.id join med_reg on cart.product_id = med_reg.med_id WHERE customer_id= users_id group by product_id";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["first_name"]. " - Name: " . $row["med_name"]. " " . $row["price"]. " ". $row["qty"]. "";
// echo $row["qty"] * $row['price']; 
// }

?>
<div class="" align='center'>
<form action="order_now.php" method="post">
<table class="searchTable" align='center'>
<tr>
    <th>Medicine Name</th>
    <!-- <th>Quantity</th> -->
    <th>Medicine Price</th>
    <th>Formula</th>
    <!-- <th>Total</th> -->
    <th>order now</th>
</tr>
<?php

if ($result->num_rows > 0) {
    $grandtotal = 0;
  while($row = $result->fetch_assoc()) {
    $grandtotal += $row["qty"] * $row['price']; 
    ?>
    <tr>

<td><input type = "text" name = "medicine_name" value = "<?php  echo $row['med_name']; ?>"readonly></td>
<!-- <td> echo $row["qty"]; </td> -->


<td><?php echo $row["price"]; ?>  </td>
<td><?php echo $row["med_formula"]; ?>  </td>
<!-- <td> echo $row["qty"] * $row['price'];   </td> -->
<td> <hr> <?php echo '<a href="order.php?link=' . $row['med_id'] . '?link2=' .  $row['pharmacy_id'] . ';">Order Now</a>';?></td>
</tr>


    
 <?php } ?>
 <tr>
    <td colspan = "4"> Grand Total </td>
    <td><?php echo $grandtotal;?></td>
  </tr>
 </table></div>
<?php }else {
    echo "0 results";
  }
  $conn->close();

 

?>

         
       

    <?php ?>
    
    </table>


    <!-- <script src="js/jquery.js"></script>
<script>
    $(document).ready(function(){
        // alert("123");
        $("#qty").keyup(function(){
            var qty = $("#qty").val();
            var price = $("#price").val();
            var total = qty * price;
            $("#total").val(total);

        });
    });
</script> -->