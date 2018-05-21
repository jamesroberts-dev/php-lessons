<?php
// Used to start session on every page of website
// Needs to be on every page

    session_start();
?>

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
    //Concatenate strings with .
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

    //Arithmetic Operators
    // +    -   /   *    %   **

    //Assignment operators
    //  ++  --  +=   -=   and all other arithmetic operands

    //If else statement
    $x = 100;
    $y = 50;
    // Comparison operators
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


    //While loops
    $counter = 0;
    while ($counter < 10){
        // Do this and that
        $counter++;
    }

    //Do while - does something atleast once, then check condition
    do{
        //Do something
        $counter++;
    } while ($counter < 20);


    //For loop
    for ($i = 0; $i < 10; $i++){
        //Do something
    }

    $nums = array(1, 2, 4, 7, 8);
    foreach ($nums as $number){
        echo $number;
    }

    // User defined functions
    function newCalc($passedInVar) {
        return $passedInVar + 5;
    }
    echo "<br>";
    echo newCalc(5);
    echo newCalc("10");
    // Typical to have single file with all functions
    // See "include" tutorial

//=====================================================================
// SUPER GLOBALS

// $GLOBALS allows acess to out of scope variables
// Ex:
    $outOfScope = 99;

    function someFunc() {
        echo $GLOBALS['outOfScope'];
    }

    // $_POST and $_GET super globals
    // Pass data into URL and move to other documents
    // See form bellow

    //Change the method type in form field
    //GET passes into URL and still stays visible  ../../?name=value
    //POST passes into URL and hides data

//  Using these super globals to retrieve the URL data
    //echo $_GET['name'];
    //echo $_POST['name'];



    // SESSION and COOKIE super globals
    // COOKIE saves user data on client side
    // SESSION saves user data on server side
    setcookie("name", "James", time() + 86400);
    // Destroy all cookie by setting their time to: time() - 1 ~(any negative)
    $_SESSION['name'] = "James12";




?>

<!--POST and GET super globals example-->
<form method="GET">
    <input type="hidden" name="name" value="value">
    <button type="submit">Press Me!</button>
</form>


</body>

</html>