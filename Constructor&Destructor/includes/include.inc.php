<?php
class Person {
  public $name;
  public $eyeColor;
  public $age;

  public function __construct(string $name, string $eyeColor, int $age) {
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }

  public function setName(string $name) {
    $this->name = $name;
  }

}

?>