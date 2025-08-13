<?php

class Person {
  private $first = "Rifat";
  private $last = "Fakir";
  private $age = 24;

  public function Owner() {
    $a = $this->first;
    return $a;
  }
}

class Pet {
  public function Owner() {
    $a = "hey there!";
    return $a;
  }
}

?>