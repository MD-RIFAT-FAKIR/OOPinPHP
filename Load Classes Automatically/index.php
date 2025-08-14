<?php
  include 'includes/autoloder.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto loder class</title>
</head>
<body>
  <?php
    $person = new person\Person('Rifat', 24);
    echo $person->getName();

    echo "<br>";

    $house = new House('UK', 12);
    echo $house->getHouseName();
  ?>
</body>
</html>