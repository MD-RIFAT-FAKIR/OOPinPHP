<?php
  declare(strict_types = 1);
  include 'includes/include.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Type_Declaration</title>
</head>
<body>
  <?php
    $person = new Person;
   
    try{
      $person->setName("Rifat Fakir");
      echo $person->getName();
    }catch(ErrorType $e){
      echo "error!:".$e->getMessage();
    }

  ?>
</body>
</html>