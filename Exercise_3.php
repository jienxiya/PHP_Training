<?php 

// 3. Using loop display this pattern :
// *
// ** 
// *** up to 7

    for($i = 1; $i <= 7; $i++){
        for($j = 1; $j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
    }

    //another solution using str_repeat
    // for($i = 1; $i <= 7; $i++){
    //     echo str_repeat("*" , $i);
    //     echo "<br>";
    // }

    // concatination
    // $asterisk = "*";
    // for($i = 1; $i <= 7; $i++){
    //     echo $asterisk."<br>";
    //     $asterisk.="*";
    // }

?>