<?php

class Person {
  protected $first = "Rifat";
  private $last = "Fakir";
  private $age = 24;

  
}

class Pet extends Person {
  public function Owner() {
    $a = $this->first;
    return $a;
  }
}

?>