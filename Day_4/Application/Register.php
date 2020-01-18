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
                <center><h3>ApPharmacy</h3></center>
                <?php if(isset($_SESSION["message"])): ?>
                    <div class="err_message alert alert-danger">
                        <?php 
                            echo $_SESSION["message"];
                            unset($_SESSION["message"]);
                            echo "<script> $('.err_message').fadeOut() </script>";
                        ?>
                    </div>
                <?php endif; ?>
                <form class="form" action="./API/register.php" method="post">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="First Name">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Last Name">

                    <label for="lname">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email">
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********">
                
                    <input type="submit" name="submit" value="Register">
                    
                </form>
                <a href="Login.php"><input type="submit" value="Login"></a>
            </div>
            <div class="col-sm-4">
                <!--  -->
            </div>
        </div>
    </div>
</div>

</body>
</html>
