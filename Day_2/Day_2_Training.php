<?php

// ERROR HANDLING

    // $denominator = 0;
    // if($denominator != 0){
    //     echo 2 / $denominator;
    // }else{
    //     echo "Cannot be divided by 'zero'";
    // }
    
    // function my_error_handler($error_no, $error_msg){
    //     echo "Opps, something went wrong:";
    //     echo "<br> Error Number: [$error_no]";
    //     echo "<br> Error Description: [$error_msg]";
    // }
    // set_error_handler("my_error_handler");
    // echo (5/0);

    // function checkNum($number){
    //     if($number > 1){
    //         throw new Exception("Value must be 1 or below");    
    //     }
    //     return true;
    // }

    // //try-catch
    // try{
    //     checkNum(2);
    //     echo "If you see this, the number is 1 oor below";
    // }catch(Exception $e){
    //     echo "Message: ".$e->getMessage();
    // }

//File Inclusion and Manipulation
    include ("menu.php");
    echo "<br>" . $menu . "<br>";
    echo "This is an example of how to include PHP file!";

?>