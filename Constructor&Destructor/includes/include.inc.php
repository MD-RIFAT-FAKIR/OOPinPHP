<?php
class Person {
  private $name;
  private $eyeColor;
  private $age;

  //constructor
  public function __construct(string $name, string $eyeColor, int $age) {
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }

  //method
  public function setName(string $name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

}

?>