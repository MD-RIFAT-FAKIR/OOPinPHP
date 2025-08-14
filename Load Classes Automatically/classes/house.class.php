<?php
class House {
  public $houseName;
  public $roadNo;

  public function __construct ($houseName, $roadNo) {
    $this->houseName = $houseName;
    $this->roadNo = $roadNo;
  }

  public function getHouseName () {
    return $this->houseName;
  }
}


?>