
<?php
    include_once "dbh.inc.php";

// Selecting data from DB
/*$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid']. "<br>";
    }
}
else{
    echo "No results returned";
}*/

    //To protect from SQL injection on DB (recommended prepared statements)
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);



// Inserting data into the
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";

    //Create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    // Prepare stmt
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL could not be run... ERROR";
    }else{
        mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
        // s means string
        // i means integer
        // b is BLOB
        // d is Double
        mysqli_stmt_execute($stmt);

    }






    header("Location: ../databaseHome.php?signup=success");

?>