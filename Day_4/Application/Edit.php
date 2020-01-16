<?php
    include("Functions.php");
    $conn = connectToDB();
    update();

    $id=$_REQUEST['id'];
    $query = "SELECT * from persons where id='".$id."'"; 
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
                <center><h3>PHP Activity Compilation</h3></center>
                <form class="form" method="post">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" value="<?php echo $row['first_name'];?>">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" value="<?php echo $row['last_name'];?>">

                    <label for="lname">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email'];?>">
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="<?php echo $row['password'];?>">
                
                    <input type="submit" name="submit" value="Register">
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
