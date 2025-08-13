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
  
  $object = new Person;
  unset($object);
  echo $object->getProperty();

  ?>
</body>
</html>