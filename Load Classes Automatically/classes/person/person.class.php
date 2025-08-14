<?php
  namespace person;

  class Person {
    public $name;
    public $age;

    public function __construct(string $name, int $age) {
      $this->name = $name;
      $this->age = $age;
    }

    public function getName() {
      return $this->name;
    }
  }
?>