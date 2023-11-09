<link rel="stylesheet" href="searchscss.css">
 <h1 align='center'>Products</h1>

  
    <!-- <a href="view_cart.php">View Cart</a> -->
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fyp";
$h = false;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// print($_POST['med']);exit;
if(isset($_POST['med'])){
$med = $_POST['med'];
}
 $val = explode(' ', $med);
//  echo count($val);
//  $med_formula = $_POST['med'];
//  $comp_name = $_POST['med'];
//  $md_price = $_POST['med'];

 if(count($val) == 1){
  $query ="select * from med_reg join ph_loginsignup on pharmacy_id = id where (med_name LIKE '%$val[0]%') ORDER BY md_price ASC ";
  $result = $conn->query($query);
   }

 if(count($val) == 2){
$query ="select * from med_reg join ph_loginsignup on pharmacy_id = id where (med_name LIKE '%$val[0]%' OR med_name LIKE '%$val[1]%') ORDER BY md_price ASC ";
$result = $conn->query($query);
 }
 if(count($val) == 3){
  $query ="select * from med_reg join ph_loginsignup on pharmacy_id = id where (med_name LIKE '%$val[0]%' OR med_name LIKE '%$val[1]%' OR med_name LIKE '%$val[2]%') ORDER BY md_price ASC ";
  $result = $conn->query($query);
   }
   if(count($val) == 4){
    $query ="select * from med_reg join ph_loginsignup on pharmacy_id = id where (med_name LIKE '%$val[0]%' OR med_name LIKE '%$val[1]%' OR med_name LIKE '%$val[2]%' OR med_name LIKE '%$val[3]%') ORDER BY md_price ASC";
    $result = $conn->query($query);
     }

     if(count($val) == 5){
      $query ="select * from med_reg join ph_loginsignup on pharmacy_id = id where (med_name LIKE '%$val[0]%' OR med_name LIKE '%$val[1]%' OR med_name LIKE '%$val[2]%'  OR med_name LIKE '%$val[3]%' OR med_name LIKE '%$val[4]%') ORDER BY md_price ASC ";
      $result = $conn->query($query);      
       }

       if(count($val) == 6){
        $query ="select * from med_reg join ph_loginsignup on pharmacy_id = id where (med_name LIKE '%$val[0]%' OR med_name LIKE '%$val[1]%' OR med_name LIKE '%$val[2]%'  OR med_name LIKE '%$val[3]%' OR med_name LIKE '%$val[4]%' OR med_name LIKE '%$val[5]%') ORDER BY md_price ASC ";
        $result = $conn->query($query);      
         }

 else if(count ($val) > 6){
  $h = true;

 }

 
// $query = "select * from med_reg join ph_loginsignup on pharmacy_id = id where med_name LIKE %'$med'% OR comp_name ='$med' OR med_formula ='$med_formula' OR md_price ='$md_price ' order by md_price ASC";
// $query ="select * from med_reg join ph_loginsignup on pharmacy_id = id where (med_name LIKE '%$val[0]%' OR med_name LIKE '%$val[1]%' OR med_name LIKE '%$val[2]%' OR med_name LIKE '%$val[3]%' OR med_name LIKE '%$val[4]%' OR med_name LIKE '%$val[5]%') ";
// print_r($query);exit;

// print($res);exit;

?>

<?php 
$itemNumbers=1;
if (!$h){

  ?>

<table class="searchTable" align='center'>
<tr>
    <th>Medicine Name</th>
    <th> Pharmacy Name </th>
    <th>Medicine Formula</th>
    <th>Medicine Price</th>
    <th>Company Name</th>
    <th>order now</th>
</tr>
<?php

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
 
    ?>
    <tr>
            <td> <hr> <?php echo$itemNumbers.': ';  echo $row['med_name'];    $itemNumbers++;?></td>
         <td><hr><?php echo $row['Pharmacy_Name'];?></td>
            <td><hr><?php  echo $row['med_formula'];?></td>
            <td><hr><?php  echo $row['md_price'];?></td>
            <td><hr><?php  echo $row['comp_name'];?></td>

            <!-- <td> <button type="button" id = "button<?php echo $itemNumbers;?>">add to cart</button></td> -->
            <!-- <td> <hr> <?php echo '<a href="cart.php?link=' . $row['med_id'] . '?link2=' .  $row['Pharmacy_Name'] . ';">Add To Cart</a>';?></td> -->
            <td> <hr> <?php echo '<a href="order.php?link=' . $row['med_id'] . '?link2=' .  $row['Pharmacy_Name'] . ';">Order Now</a>';?></td>
          </tr>


    
 <?php }
}  else {
  echo "0 results";
}
}
 
else{
?>

<h3>You Only Have Allowed 5 Paramets</h3>

<?php
}

?>
</table>


<?php

  $conn->close();
  ?>
<!-- 
<script src = "js/jqueryajax.min.js">
</script>
<script>
    $(document).ready(function(){
      // alert("123");
      var x = $("#id").val();
      var count = 1;
      // alert(x);
          $("#button.'+.count.+'").click(function(){
              alert(x);
          });
          count++;
    });
    // exit;
</script>
 -->
