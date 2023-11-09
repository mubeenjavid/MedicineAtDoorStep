<?php
    $id = $_GET['link'];
    require_once("signup/config.php");
    $sql = "DELETE FROM med_reg WHERE med_id=$id";

    if ($dbc->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    header("location: deleted.html");
?>