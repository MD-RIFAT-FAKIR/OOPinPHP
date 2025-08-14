<?php
//scope resulation operator:: 
class FirstClass {
  //properties
  const Example = "You cna't change this!";

  //methods
  public static function test() {
   echo self::Example;
  }
}

$a = FirstClass::test();
  echo $a;

//second class example
class SecondClass extends FirstClass {
  //properties 
  public static $staticProperty = "A static propety!";

  //methods
  public static function anotherTest() {
    echo parent::Example;
    echo self::$staticProperty;
  }

}
// echo SecondClass::anotherTest();
?>