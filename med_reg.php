<?php
$name_img="";

if(isset($_POST['submit']) && isset($_FILES['my_img'])){
  // echo "<pre>";
  // print_r($_FILES['my_img']);
  // echo "</pre>";
  $img_name = $_FILES['my_img']['name'];
  $img_size = $_FILES['my_img']['size'];
  $tmp_name = $_FILES['my_img']['tmp_name'];
  $error = $_FILES['my_img']['error'];
  if($error === 0){
      if($img_size <= 3100000){
          $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
          $img_ex_lc = strtolower($img_ex);
          $allowed_exc = array("jpg", "jpeg", "png");
          if(in_array($img_ex_lc, $allowed_exc)){
              $new_img_name = uniqid("IMG", true).'.'.$img_ex_lc;
              $img_upload_path = "images/".$new_img_name;
              move_uploaded_file($tmp_name,$img_upload_path);
              $name_img = $new_img_name;

          }
          }
  //        
}
}



if(!empty($_FILES['sample_file']))
{
  $originalFileName = basename( $_FILES['sample_file']['name']);
  $uploadedFileName = 'uploaded_file_' . time() . '.' . pathinfo($originalFileName, PATHINFO_EXTENSION); //basename( $_FILES['sample_file']['name']);

  if(move_uploaded_file($_FILES['sample_file']['tmp_name'], $uploadedFileName)) {
  //  echo "The file ".  $originalFileName. " has been uploaded successfuly! File will be imported to the databae. A report email will be sent.";
  } else{
  //  echo "An error occurred during file upload, please try again!";
  }
}



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

// $med_id = $_POST['med_id'];
$id = $_POST['id'];
$med_name = $_POST['med_name'];
$comp_name = $_POST['comp_name'];
$med_formula = $_POST['med_formula'];
$mnf_date = $_POST['mnf_date'];
$exp_date = $_POST['exp_date'];
$md_price = $_POST['md_price'];
// $new_img_name = $_FILES['my_img']['name'];
$sql = "INSERT INTO med_reg (med_name, comp_name, med_formula, mnf_date, exp_date, md_price, pharmacy_id, my_img ) VALUES ('$med_name', '$comp_name', '$med_formula', '$mnf_date', '$exp_date', '$md_price', '$id', '$name_img')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 // header("location: med_registered.html");
} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("location: edited.php")

  // header("location: test.php?File=$originalFileName&pid=$id")


 ?>

