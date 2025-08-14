<?php
interface parent1 {
  public function add($a, $b);
}

interface parent2 {
  public function sub($c, $d);
}

class Child implements parent1, parent2 {
  public function add($a, $b) {
    echo $a + $b;
  }
 
  public function sub($c, $d) {
    echo $c - $d;
  }
}

$childObject = new Child;

$childObject->add(20, 30);

echo "<br>";

$childObject->sub(20, 10);


?>