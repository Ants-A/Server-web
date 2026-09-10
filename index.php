<?php

class Box 
{
  public $width;
  public $height;
  public $length;
  public $isOpen = false;
  public function open()
  {
    $this->isOpen = true;
  }
}

$box1 = new Box();
$box1->width = 10;
$box1->height = 10;
$box1->length = 10;
$box1->open();


$box2 = new Box();
$box2->width = 20;
$box2->height = 20;
$box2->length = 20;
$box2->open();

var_dump($box1);
var_dump($box2);
