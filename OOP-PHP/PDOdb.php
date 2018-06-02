<?php
    include_once "includes/dbh.inc.php";
    include_once "includes/user.inc.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    //print_r(PDO::getAvailableDrivers()); // Check DB drivers
    $obj = new DBHandler();
    $obj->connect();

    $user = new User;
   // echo $user->getAllUsers();
    echo $user->getUserWithCountCheck();
?>
</body>
</html>