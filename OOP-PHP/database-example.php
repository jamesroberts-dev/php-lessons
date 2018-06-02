<?php
    include "includes/dbh.inc.php";
    include "includes/user.inc.php";
    include "includes/viewuser.inc.php";

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
    $users = new ViewUser();
    $users->showAllUsers();
?>
</body>
</html>