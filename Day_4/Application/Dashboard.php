<?php
    include("auth.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href='form.css' />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <br><br>
        <center><h2>Welcome to ApPharmacy</h2></center>
        <br><br>
        <hr
        
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="./API/viewUsers.php"><button class="button" >View Users</button></a>
                </div>
                <div class="col-sm-4">
                    <a href="./API/viewMedicines.php"><button class="button" >View Medicine</button></a>
                    <a href="addMedicine.php"><button class="button" >Add Medicine</button></a>
                </div>
                <div class="col-sm-4">  
                    <a href="./API/logout.php"><button class="button" >Logout</button></a>
                </div>
            </div>
        </div>

    </body>
</html>
