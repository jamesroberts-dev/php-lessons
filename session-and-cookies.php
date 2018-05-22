<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions and Cookies</title>
</head>
<body>

<ul>
    <li><a href="index.php"></a>HOME</li>
    <!--<li><a href="contact.php"></a>CONTACT</li>-->
</ul>

<?php
    $_SESSION['username'] = "James24";
    echo $_SESSION['username'];


    // Check to see if a user is logged in using session superglobal
    if (!isset($_SESSION['username'])) {
        echo "You are not logged in!";
    }
    else{
        echo "You are logged in!";
    }

?>

</body>
</html>










