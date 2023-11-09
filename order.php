<!-- <link rel="stylesheet" href="ordercss.css"> -->

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- icons css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- footer thigs css -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
<style>
    body{
        background: linear-gradient(348deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 47%, rgba(252,176,69,1) 100%);
    }
    .godaContainer{
        text-align: center;
        background: rgba(255, 255, 255, 0.6);
        padding: 30px;
        border-radius: 0 0 30px 30px;
        backdrop-filter: blur(7px);
        
    }
</style>
<div class="container godaContainer">
    <h1>Add To Cart</h1>
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
            $price = $row['md_price'];
            $pharmacy = $row['pharmacy_id'];
            $formula = $row['med_formula'];
        ?>


        <form action="order_now.php" method="POST">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Medicine Name</th>
                        <th> Quantity </th>
                        <th> address </th>
                        <th>Medicine Price</th>
                        <th>Pharmacy Id</th>
                        <th>Medicine Formula</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" type="text" name="medicine_name" value="<?php  echo $row['med_name']; ?>"></td>
                        <td><input class="form-control" type="number" name="qty" value =" " id="qty"></td>
                        <td><input class="form-control" type="text" name="address" value =" " id="address"></td>
                        <td><input class="form-control" type="number" name="medicine_price" value ="<?php echo $row['md_price']; ?>" id="price" readonly></td>
                        <td><input class="form-control" type="text" name="pharrmacy" value ="<?php echo $row['pharmacy_id']; ?>"></td>
                        <td><input class="form-control" type="text" name="medicine_formula" value ="<?php echo $row['med_formula']; ?>" ></td>
                        <td><input class="form-control" type="number" name="total" value="" id="total" readonly></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-grid gap-2">
                <button type="submit" name="" value="" class="btn btn-danger"> Order Now</button>
            </div>
            
        </form>
<?php } ?>
</div>



<!-- <div class= "submit" ><a href="index.php">Submit </div> -->

<script src="js/jquery.js"></script>
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
</script>