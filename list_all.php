<link rel="stylesheet" href="list_all.css">
<h1 align='center'>Here are your all products..!</h1>
<?php 
$id = $_GET['link'];
// print($id);
include('signup/config.php');
$qry = mysqli_query($dbc, "SELECT * FROM med_reg WHERE pharmacy_id = $id");
// print_r($qry);exit;
?>
<table class="searchTable" align='center'>
<tr>
    <th> Sr #</th>
    <th>Medicine Name</th>
    <th>Company Name</th>
    <th>Medicine Formula</th>
    <th> Manufacturing Date </th>
    <th>Expiry Date </th>
    <th>Medicine Price</th>
    <th colspan = "2"> Action </th>
</tr>
<?php 
$itemNumbers=1;
$btn1=1;
$btn2=1;
if ($qry->num_rows > 0) {
  while($row = $qry->fetch_assoc()) {?>
  

    <tr>
            <td> <hr> <?php echo$itemNumbers.': ';   $itemNumbers++;?></td>
         <td><hr><?php echo $row['med_name'];?></td>
         <td><hr><?php  echo $row['comp_name'];?></td>
            <td><hr><?php  echo $row['med_formula'];?></td>
            <td><hr><?php  echo $row['mnf_date'];?></td>
            <td><hr><?php  echo $row['exp_date'];?></td>
            <td><hr><?php  echo $row['md_price'];?></td>
            <td colspan ="2"><?php echo '<a href="/darks/edit_product.php?link=' . $row['med_id']. '"><button type="button" class="btn btn-primary">Edit Product</button></a>';?>
            <?php echo '<a href="/darks/delete_product.php?link=' . $row['med_id']. '"><button type="button" class="btn btn-primary">Delete Product</button></a>';?>                        
            </td>
          
          </tr>


          <?php } ?>

</table>
<?php
  } else {
    echo "0 results";
  }

  ?>
