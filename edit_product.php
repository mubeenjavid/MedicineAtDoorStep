<link rel="stylesheet" href="edit.css">

<h1 class="" align ='center' >Edit Your Products Details</h1>
<?php
require_once("signup/config.php");
    $id = $_GET['link'];
    // $pharmacy = $_GET['link2'];
$name = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT * FROM med_reg WHERE med_id='$id'";

$result = mysqli_query($dbc, $sql);
// print_r($result);exit;
  // output data of each row
  // $row = mysqli_fetch_array($result);

// foreach($result as $row){
    while($row = mysqli_fetch_array($result)){
   $name = $row['med_name'];
//    $price = $row['md_price'];
//    $pharmacy = $row['pharmacy_id'];
   $formula = $row['med_formula'];






  
?>


<div class="" align='center'>
<form action="updated.php" method="post">

<table class="searchTable" align='center' >
<tr>
    <th>Medicine Name</th>
    <!-- <th> Quantity </th> -->
    <th>Medicine Price</th>
    <!-- <th>Pharmacy Id</th> -->
    <th>Medicine Formula</th>
    <!-- <th>Total</th> -->
  
</tr>
<tr>

<td><input type = "text" name = "med_name" value = "<?php  echo $row['med_name']; ?>"></td>
<!-- <td><input type = "number" name = "qty" value =" " id = "qty"></td> -->
<td><input type = "number" name = "med_price" value ="<?php echo $row['md_price']; ?>" id="price" ></td>
<!-- <td><input type = "text" name = "pharrmacy" value ="<?php echo $row['pharmacy_id']; ?>"></td> -->
<td><input type = "text" name = "med_formula" value ="<?php echo $row['med_formula']; ?>" >
<input type = "hidden" name = "id"  value = "<?php echo $row['med_id'];?>">
</td>
<!-- <td><input type = "number" name = "total" value="" id = "total" readonly></td> -->
</tr></table></div>
 <div class="" align='center'>

<input type="submit" name="" value="Update" class="btn">
<!-- <a href=""><button type="button" class="btn btn-primary">Update </button></a>'</div>  -->

<?php } 
?>
