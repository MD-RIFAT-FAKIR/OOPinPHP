<?php
  include('includes/include.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>static property&method</title>
</head>
<body>
  <?php
    echo Person::$drinkingAge."<br>";
    Person::getNewDrinkingAge(18);
    echo Person::$drinkingAge."<br>";

    $person = new Person;
    echo $person->getDA();
  ?>
</body>
</html>