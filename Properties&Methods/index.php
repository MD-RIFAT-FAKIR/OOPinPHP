<?php
  include('includes/person.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Properties&Methods</title>
</head>
<body>
  <?php
    $person01 = new Person();
    $person01->setName('Rifat !!');
    $person01->setAge(24);
    $person01->name;
    $person01->age;
    echo $person01->name;
    echo"<br>";
    echo $person01->age;

    
  ?>
</body>
</html>