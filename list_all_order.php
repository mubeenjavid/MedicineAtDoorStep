<link rel="stylesheet" href="list_order.css">
<h1 class="" align ='center' >view your order list..</h1>
<?php 
$id = $_GET['link'];
// print($id);
include('signup/config.php');
$qry = mysqli_query($dbc, "SELECT * FROM order_now WHERE pharrmacy = $id");
// print_r($qry);exit;
?>
<table class="searchTable" align='center'>
<tr>
    <th> Sr #</th>
    <th>Medicine Name</th>
    <th>Quantity</th>
    <th>Medicine Price</th>
    <th>Total Price</th>
    <th>Date</th>
   
</tr>
<?php 
$itemNumbers=1;

if ($qry->num_rows > 0) {
  $grandtotal = 0;
  while($row = $qry->fetch_assoc()) {
    $grandtotal += $row["qty"] * $row['medicine_price']; ?>
  

    <tr>
            <td> <hr> <?php echo$itemNumbers.': ';   $itemNumbers++;?></td>
         <td><hr><?php echo $row['medicine_name'];?></td>
         <td><hr><?php  echo $row['qty'];?></td>
         <td><hr><?php  echo $row['medicine_price'];?></td>
         <td><hr><?php echo $row["qty"] * $row['medicine_price']; ?>  </td>
         <td><hr><?php  echo $row['order_date'];?></td>
   
    
            
          
          
          </tr>


          <?php } ?>
          <tr>
    <td colspan = "4"><hr> <h1 style="color: red;"> Total Earnings</h1> </td>
    <td><hr><h1 style="color: red;"><?php echo$grandtotal;?></h1></td>
  </tr>
 </table>
</table>
<?php
  } else {
    echo "0 results";
  }

  ?>
