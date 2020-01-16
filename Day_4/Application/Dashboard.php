<?php
    if(isset($_POST))

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
        <center><h2>Welcome to PHP!</h2></center>
        <br><br>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- <button type="submit"  name="view" class="button"><span>View Users</span></button>   -->
                    <form  action="viewUsers.php" method="post">";
                        <input type="submit" id="submit" name="submit" class="button" value="View Users" />
                    </form>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">  

                </div>
            </div>
        </div>

    </body>
</html>
