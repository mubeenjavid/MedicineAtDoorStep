<?php
require_once("signup/config.php");
    $med_name = $_POST['med_name'];
    $med_price = $_POST['med_price'];
    $med_formula = $_POST['med_formula'];
    $id = $_POST['id'];
    $sql = "UPDATE med_reg SET med_name='$med_name', med_formula = '$med_formula', md_price = '$med_price' WHERE med_id=$id";

if ($dbc->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
header("location: edited.php");
?>