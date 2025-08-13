<?php
class Person {
  static $drinkingAge = 21;

  public static function getNewDrinkingAge($newDA) {
    return self::$drinkingAge = $newDA;
  }

  public function getDA() {
    return self::$drinkingAge;
  }
}

?>