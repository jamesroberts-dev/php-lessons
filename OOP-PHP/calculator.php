<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Calculator</title>
</head>
<body>
<form action="includes/calculator.php" method="post">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="cal">
        <option value="Add">Add</option>
        <option value="Subtract">Subtract</option>
        <option value="Multiply">Multiply</option>
    </select>
    <button type="submit">Calculate</button>
</form>
</body>
</html>