<?php 

// 3. Using loop display this pattern :
// *
// ** 
// *** up to 7

for($i = 0; $i <= 7; $i++){
    for($j = 0; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

?>