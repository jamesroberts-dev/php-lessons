<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work or Chill</title>
</head>
<body>

<?php
    // Returns index of day of week 0 - 1   Sunday being 0;
    $dayOfWeek = date("w");

    switch ($dayOfWeek){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "<p>It is a weekday, get back to work</p>";
            break;
        case 6:
        case 0:
            echo "<p>It is the weekend! Chill out!</p>";
            break;
    }

?>

</body>
</html>