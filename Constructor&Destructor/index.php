<?php
include('includes/include.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constructor&Destructor</title>
</head>
<body>
  <?php
  $person1 = new Person('rifat','black',24);

  echo $person1->getName();


  ?>
</body>
</html>