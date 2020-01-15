<?php

// 1. function that can get the summary of two numbers.
    function getSum($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    };

// 2. function that can display data in an array
    function displayData($my_array){
        $datas = "";
        foreach($my_array as $data){
            $datas .= " $data";
        }
        return $datas;
    };

    function displayDataInArray($my_array){
        print_r($my_array);
    };

// 3. function that can display multidimensional array
    $my_array = array(
        "food" => array(
            0 => 'Go',
            1 => 'Glow',
            2 => 'Grow'
        ),
        "section" => array(
            "sectionA" => ["Mary", "Jane", "Mon","Sun","Sen"],
            "sectionB" => ["Kan", "Ken", "Kon","Kun","Kin"]
        ),
        "ph_presidents" => array(
            0 => 'Marcos',
            1 => 'Noynoy',
            2 => 'Duterte'
        )
    );
    function displayMultidimensionalArray(){
        global $my_array;
        $array = "";
        foreach($my_array as $category=>$content){
            $array .= "<br>$category" . ": <br>";
            foreach($content as $data){
                if($data == $my_array["section"]["sectionA"]){
                    $array .= "&nbsp;&nbsp;Section A: ";
                    foreach($my_array["section"]["sectionA"] as $sub){
                        $array .= $sub . " ";
                    }
                }else if($data == $my_array["section"]["sectionB"]){
                    $array .= "<br>&nbsp;&nbsp;Section B: ";
                    foreach($my_array["section"]["sectionB"] as $sub){
                        $array .= $sub . " ";
                    }
                }else{
                    $array .= "&nbsp;&nbsp;$data";
                }
                
            }
        }
        return $array;
    }

// 4. function that can create associative array and return it in your working file.
    function createAssociativeArray($key, $value){
        $array = array();
        $array += array($key => $value);
        return $array;
    }

// 5. function that can add data to an existing array 
    // $fruits = ["banana","mango","apple"];

    function addDataInAssociativeArray(&$array,$key,$value){
        // global $fruits;
        // $fruits[$key] = $value;
        $array[$key] = $value;
        echo "<br>Successfully Added!";
        // return $fruits;
        return $array;
    }

    function addDataInNumericArray(&$array,$data){
        // global $fruits;
        // array_push($fruits,$data);
        array_push($array,$data);
        echo "<br>Successfully Added!";
        // return $fruits;
        return $array;
    }

    function addData(&$array,$data){
        array_push($array,$data);
        echo "<br>Successfully Added!";
        return $array;
    }

// 6. display data from number 5.
    function display(){
        global $fruits;
        print_r($fruits);
    }

    function displayNumber5($array){
        print_r($array);
    }
?>