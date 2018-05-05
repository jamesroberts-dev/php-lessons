<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of document</title>
</head>

<body>

<form method="get">
    <input name="person" type="text">
    <button>SUBMIT</button>
</form>
<?php
    echo "Hello World, James!";
    echo "You better stick to this learning grind";
    print "Same thing as echo, but echo is faster";
    echo 12 + 3;


    //Variables
    $name = $_GET['person'];
    echo "Well hello, there ".$name;

    //Functions
    //Predetermined functions
    $toPrint =  "Howsit James";
    echo $toPrint;
    echo strlen($toPrint); //Length of string
    echo str_word_count($toPrint); //word count
    echo strrev($toPrint);  //reverse a string
    echo strpos($toPrint, "Ja"); //starting position of a substring
    echo str_replace($toPrint, "Howsit", "JIMMY!");
    echo $toPrint;



    //Data types
    //String
    $name = "This is a string";
    $str = 'this is also a string';

    //Integers
    $number = 20;

    //Floats
    $fl_num = 20.456;

    //Boolean
    $check = true; //  1
    $f_check = false; // 0

    //Arrays
    $arr = array("James", "Georgie", "Sean");
    echo $arr['1'];

    //Arithmetic Opperators
    // +    -   /   *    %   **

    //Assignment opperators
    //  ++  --  +=   -=   and all other arithmetic operands

    //If else statement
    $x = 100;
    $y = 50;
    // Comparison opperators
    // ==   <   >   != or <>
    // ===      equal and of same type (Strictly equal)
    // ==       will not check data type so "10" == 10 returns true.  NB!

    if ($x < $y){
        echo "less than";
    }
    elseif($x == $y) {
        echo "Not less than";
    }
    else{
        echo "Neither are true";
    }

//    Logical Opperators OR  - AND
        //    ||     &&     xor - only one can be true

    // Switch statement
    switch ($x){
        case 1:
            echo "x is One";
            break;

        case 2:
            echo "x is Two";
            break;

        default:
            echo "X is nothing";
            break;
    }

?>

</body>

</html>