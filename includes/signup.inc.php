
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

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

// Inserting data into the
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
    mysqli_query($conn, $sql);
// No need to check for returned results,
// statement will run from line above

    header("Location: ../databaseHome.php?signup=success");

?>