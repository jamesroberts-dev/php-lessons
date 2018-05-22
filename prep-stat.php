<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prepared Statements</title>
</head>
<body>

<?php
    //MMTUTS ep 40

    // Better way to retrieve data from a DB (SAFER)
    $data = "Admin";


    // Template SQL
    $sql = "SELECT * FROM users WHERE user_uid=?;";

    // Create Prepared statement
    $stmt = mysqli_init($conn);

    // Prepare the statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed";
    }
    else{
        // Bind paramenters to placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);//if two placeholder then ss
        // Run params inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }


    while ($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid']."<br>";
    }


?>


</body>
</html>