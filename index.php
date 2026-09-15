<?php

class Box 
{
  public bool $isOpen = false;
  protected bool $hasBeenOpened = false;

  public function __construct(public int $width, public $height, public $length)
  {
    
  }

  public function setWidth(int $width) 
  {
    if ($width<0)
    {
      $this->width = 0;
    }
    $this->width = $width;
  }

  public function open()
  {
    $this->isOpen = true;
  }

  public function volume()
  {
    return $this->width * $this->height * $this->length;
  }

  public function test1 ()
  {
    var_dump($this->hasBeenOpened);
  }
}

class MetalBox extends Box 
{
  public $weightPerUnit;

  public function mass() 
  {
    return $this->weightPerUnit * $this->volume();
  }


  public function test2 ()
  {
    var_dump($this->hasBeenOpened);
  }
}

trait HasColor 
{
  public $color;
  public function showColor()
  {
    return $this-color;
  }
}

trait HasSmell 
{
  public $smell;
  public function sniff()
  {
    return $this-smell;
  }
}


$metal1 = new MetalBox(1, 2, 3);
$metal1->weightPerUnit = 1;
var_dump($metal1->mass());
$metal1->test1();
$metal1->test2();
