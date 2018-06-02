<?php
    include "includes/newclass.inc.php";
    include "includes/ParentClass.php";
    $object = new NewClass;
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
//  Inherited property from ParentClass. (Must be public or protected with method)
    echo $object->name();
    echo $object -> getProperty(). "<br>";
    $object -> setNewProperty("This is the new data property");
    echo $object -> getProperty();

    $object2 = new NewClass;
    unset($object2); // Deletes the object, triggers the destructor method

    //Accessing static properties from a class
    echo NewClass::$static;

    // Accessing static methods from a class
    echo NewClass::staticMethod();

    $user = new User("James", "Roberts", "Brown", "Brown");

?>
</body>
</html>