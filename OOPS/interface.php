<?php

interface plants {
  public function color();
}


class Stem implements plants {
  public function color() {
    echo " Green ";
  }
}

class Root implements plants {
  public function color() {
    echo " Brown ";
  }
}

class leaves implements plants {
  public function color() {
    echo " green ";
  }
}


$stem = new Stem();
$root = new root();
$leaves= new leaves();
$plants = array($stem, $root, $leaves);


foreach($plants as $plants) {
  $plants->color();
}
?>