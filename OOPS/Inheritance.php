<?php
class Veg {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

//Brinjal is inherited from veg
class Brinjal extends Veg {
  public function message() {
    echo "Am I a Veg ? ";
  }
}
$strawberry = new Brinjal("Brinjal", "purple");
$strawberry->message();
$strawberry->intro();
?>