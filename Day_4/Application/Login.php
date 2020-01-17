<?php
session_start();
if(isset($_SESSION["login"])){
    if ($_SESSION["login"]) {
        header("Location: Dashboard.php");
    } 
}
//     include("Functions.php");

//     create();
//     $conn = connectToDB();

//     if(isset($_COOKIE["type"])){
//         header("Location: Login.php");
//     }

//     $message = '';

//     if(isset($_POST["login"])){
//         if(empty($_POST["email"]) || empty($_POST["password"])){
//             $message = "<div class='alert alert-danger'>Both Fields are required</div>";
//         }else{
//             $query = "SELECT * FROM persons WHERE email = :email";
//             $statement = $conn->prepare($query);
//             // $statement->bind_param(['email'=>$_POST['email']]);
//             // $statement->execute();
//             // $statement->execute(
//             //     array(
//             //         'email' => $_POST["email"]
//             //     )
//             // );
//             $count = $statement->rowCount();
//             if($count > 0){
//                 $result = $statement->fetchAll();
//                 foreach($result as $row) {
//                     if(password_verify($_POST["password"], $row["password"])){
//                         setcookie("type", $row["email"], time()+3600);
//                         header("location:Dashboard.php");
//                     }else{
//                         $message = '<div class="alert alert-danger">Wrong Password</div>';
//                     }
//                 }
//             }else{
//                 $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
//             }
//         }
//     }


// ?>

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
                <?php if(isset($_SESSION["message"])): ?>
                    <div class="err_message alert alert-danger">
                        <?php 
                            echo $_SESSION["message"];
                            unset($_SESSION["message"]);
                            echo "<script> $('.err_message').fadeOut() </script>";
                        ?>
                    </div>
                <?php endif; ?>
                <form class="form"  action="./API/login.php" method="post">

                    <label for="lname">Email</label>
                    <input type="email" id="email" name="email" value="<?php 
                    if(isset($_COOKIE["user"])) {
                        echo $_COOKIE["user"];
                    } ?>" placeholder="Email">
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********">
                    <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" <?php 
                    if(isset($_COOKIE["user"])) {
                        echo "checked";
                    } ?>> Remember me</label>
                    </div>
                    <input type="submit" name="login" value="Login">
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