<?php

class Box 
{
  public $isOpen = false;

  public function __construct(public $width, public $height, public $length)
  {
    var_dump("Object created"); 
  }

  public function open()
  {
    $this->isOpen = true;
  }

  public function __call($name, $args) 
  {
    var_dump($name, $args);
  }

  public function __set($name, $value) 
  {
    var_dump($name, $value);
  }

  public function __get($name)
  {
    var_dump($name);
    return 'cool value';
  }

  public function __invoke()
  {
    var_dump("What the hell you doing?");
  }

  public function __tostring()
  {
    return 'This is a string';
  }

  public function __destruct() 
  {
    var_dump("Object destroyed");
  }
}

function test()
{
  $box2 = new Box(1, 2, 3);
}

test();
$box1 = new Box(1, 2, 3);
echo $box1;
$box1->meow = "lol";
$box1();

