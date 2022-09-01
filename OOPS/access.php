<?php
class Veg {
  public $name;
  public $color;
  public $weight;

  function set_name($n) 
  {  
    $this->name = $n;
  }
  protected function set_color($n)
   { 
    $this->color = $n;
  }
  private function set_weight($n) 
  { 
    $this->weight = $n;
  }
}

$mango = new Veg();
$mango->set_name('apple'); //OK
$mango->set_color('red'); //Error because protected only acess within a class and derived class
$mango->set_weight('200'); //Error because private only access within a class
?>