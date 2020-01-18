<?php
    session_start();
    include("Functions.php");
    try{
        $manage = new Manage();
        $conn = $manage->connectToDB(); //own function that connect to database
    }catch(Exception $e){
        echo "Message: " .$e->getMessage();
    }
    
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
                <center><h3>Add Medicine</h3></center>
                <?php if(isset($_SESSION["message"])): ?>
                    <div class="err_message alert alert-danger">
                        <?php 
                            echo $_SESSION["message"];
                            unset($_SESSION["message"]);
                            echo "<script> $('.err_message').fadeOut() </script>";
                        ?>
                    </div>
                <?php endif; ?>
                <form class="form" action="./API/addMed.php" method="post">
                    <label for="generic_name">Generic Name</label>
                    <input type="text" name="generic_name" placeholder="Generic Name">

                    <label for="brand_name">Brand Name</label>
                    <input type="text"  name="brand_name" placeholder="Brand Name">

                    <label for="price">Price</label>
                    <input type="text" name="price" placeholder="Price">
                    
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" placeholder="Quantity">
                
                    <input type="submit" name="submit" value="Add">
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
