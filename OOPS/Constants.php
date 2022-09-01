<?php
class Hello {
  const LEAVING_MESSAGE = "Thank you!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new hello();
$goodbye->byebye();
?>