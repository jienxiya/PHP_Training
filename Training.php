<?php  

    // echo "I'm PHP.";
    // echo gettype(1.0);

    //object
    // class greeting{

    //     //properties
    //     public $str = "Hello World!";
    //     public $str2 = "Hello Earth!";

         
    //     //methods
    //     function show_greeting($name){
    //         $test = "I am " . $name;
    //         return $test;
    //     }

    //     //methods
    //     function show_greeting3(){
    //         return $this->str2;
    //     }
    // }

    // $message = new greeting;
    // var_dump($message->show_greeting("Maria"));
    

    //constant
    // define("test", "samoka");
    // $test = "ikaw";
    // echo "This is a test " . test;

    //String
    // var_dump('Ako ra');
    // echo "<br>ikaw ra";
    // $name="MJ";
    // echo $name . " is friends with Monica";

    //Conditions
    // $num = 11;
    
    
    // if($num <= 9){
    //     echo 'I am less than or equal to 9';
    // }else{
    //     echo 'I am not.';
    // }

    // echo $num <= 10? "yes" : "not";

    // $month = "Feb";
    // switch($month){
    //     case "Jan":
    //         echo "January";
    //         break;
    //     case "Feb":
    //         echo "February";
    //         break;
    //     case "Mar":
    //         echo "March";
    //         break;
    //     default:
    //         echo "Does not exist";
    //         break;
    // }

    // array_numeric
    // $my_array[0] = "value"; // way of making numeric array
    // var_dump( $my_array);

    // $my_array = array(0 => "value");
    // var_dump( $my_array);

    // $my_array = [0 => "value"];
    // var_dump( $my_array);

 
    // $names[0] = "MJ"; //creating numeric array
    // $names[1] = "Monica";
    // $names[2] = "Ching";
    // $names[3] = "JM";
    // $names[4] = "DR";
    // $names[3] = "ldkhfet";

    // // $movie2 = array( //other way of creating numeric array
    // //     0 => "MJ",
    // //     1 => "Monica"
    // // );
 
    // //add item
    // array_push($names, "Jane");
    // print_r($names);

    // echo "<br>";
    // //remove item
    // // unset($names[3]);
    // array_splice($names, 1,3);
    // print_r($names);

   // array_associative
//    $persons = array("ako" => "Gwapa", "siya" => "Gwapo", "ikaw" => "But an");
//    print_r($persons["ako"]);

//    $film = array(
//        "comedy" => array(
//            0 => 'pink panther',
//            1 => 'jhon english',
//            2 => 'see no evil hear no evil'
//        ),
//        "action" => array(
//             // 0 => "Die Hard",
//             "test" => "Die Hard",
//             1 => "Expendables"
//        )
//     );

//     // print_r($film['action'][0]);
//     print_r($film['action']["test"]);


    //loops
    // $names[0] = "MJ"; 
    // $names[1] = "Monica";
    // $names[2] = "Ching";
    // $names[3] = "JM";
    // $names[4] = "DR";

    // for($x = 0; $x < count($names); $x++){
    //     echo $names[$x]. "<br>";
    // }

    // foreach($names as $name){
    //     echo $name . "<br>";
    // }

    // $i = 0;
    // while ($i < count($names)){
    //     echo $names[$i] . "<br>";
    //     $i++;
    // }

    // do{
    //     echo $names[$i] . "<br>";
    //     $i++;
    // } while($i < count($names))

?>