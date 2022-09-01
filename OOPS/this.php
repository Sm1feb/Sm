<!DOCTYPE html>
<html>
<body>

<?php
class Veg {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$vege = new Veg();
$vege->set_name("tamato");

echo $vege->name;
?>
 
</body>
</html>
