<?php
    include_once "includes/dbh.inc.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<?php

    $person = "James";
    $people = array("james", "Jane", "John");

    echo $people[0];

    $data = array(); //Empty Array


   //Adding data - not the best method
    $data[] = "James";
    $data[] = 15;

    //Better method
    array_push($data, "James");   //One entry
    array_push($data, "James", 15, 23); // Multiple entries

    // Adding data from a database connection
    $sql = "SELECT * FROM data";
    $result = mysqli_query($conn, $sql);
    $datas = array();
    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $datas = $row;   //This will create a multi dimensional array [][]
        }
    }
    // Print specific item from all rows of the database results
    foreach ($data as $item) {
        echo $item['text']." ";  //Added on a space
    }



    echo $data[0];
    print_r($data);   // prints entire array

    //Array types

    //Indexed arrays
    $index_arr = array("James", "John", "Jane");
    echo $index_arr[0];

    //Associative arrays
    $assoc_arr = array("first" => "James", "last" => "Roberts", "age" => 22);

    //Multidimensional Arrays
    $multDim_arr = array(array("James", "Roberts"), "John", "Jane");






?>

</body>
</html>