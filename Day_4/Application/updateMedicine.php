<?php
    include("Functions.php");
    $manage = new Manage();
    $conn = $manage->connectToDB(); //own function that connect to database
    $manage->updateMedicine();
    $id = $_REQUEST['id'];
    $query = "SELECT * from medicines where id='".$id."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' href='form.css' />
</head>
</head>
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!--  -->
            </div>
            <div class="col-sm-6    ">
                <center><h3>Update Medicine Information</h3></center>
                <form class="form" method="post">
                    <input type="text" value="<?php echo $row['id'];?>" hidden name="id">
                    <label for="generic_name">Generic Name</label>
                    <input type="text" id="generic_name" name="generic_name" value="<?php echo $row['generic_name'];?>">

                    <label for="brand_name">Brand Name</label>
                    <input type="text" id="brand_name" name="brand_name" value="<?php echo $row['brand_name'];?>">

                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" value="<?php echo $row['price'];?>">
                    
                    <label for="quantity">Quantity</label>
                    <input type="text" id="quantity" name="quantity" value="<?php echo $row['quantity'];?>">
                
                    <input type="submit" name="submit" value="Save Changes">
                </form>
            </div>
            <div class="col-sm-4">
                <!--  -->
            </div>
        </div>
    </div>
</div>

</body>
</html>
