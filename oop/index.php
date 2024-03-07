<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>

<body>
    <?php

    // Import class Animal, Frog, and Ape
    require_once 'Animal.php';
    require_once 'Frog.php';
    require_once 'Ape.php';

    // Create instances of Animal, Frog, and Ape
    $animal1 = new Animal("Shaun");
    $frog1 = new Frog("Buduk");
    $ape1 = new Ape("Kera Sakti");

    // Display information about each animal
    echo "<h2>Animal Information:</h2>";
    $animal1->displayInfo();
    echo "<br>";

    $frog1->displayInfo();
    $frog1->jump();
    echo "<br>";

    $ape1->displayInfo();
    $ape1->yell();
    echo "<br>";

    ?>
</body>

</html>