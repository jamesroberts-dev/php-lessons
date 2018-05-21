<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator Example</title>
</head>
<body>
<form>
    <input type="text" name="num1">
    <select name="opp" id="opp-select">
        <option value="Add"> + </option>
        <option value="Sub"> - </option>
        <option value="Mul"> x </option>
        <option value="Div"> / </option>
        <!--this should be a comment-->
    </select>
    <input type="text" name="num2">
    <button type="submit" name="submit" value="submit">Calculate!</button>

</form>

<?php
    if (isset($_GET['submit'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        $operand = $_GET['opp'];

        switch ($operand) {
            case "Add" :
                echo $num1 . " plus " . $num2 . " is : " . ($num1 + $num2);
                break;
            case "Sub" :
                echo $num1 . " minus " . $num2 . " is : " . ($num1 - $num2);
                break;
            case "Mul" :
                echo $num1 . " multiplied by " . $num2 . " is : " . ($num1 * $num2);
                break;
            case "Div" :
                echo $num1 . " plus " . $num2 . " is : " . ($num1 / $num2);
                break;
            default:
                echo "No answer at the moment";
                break;
        }
    }
?>

</body>
</html>