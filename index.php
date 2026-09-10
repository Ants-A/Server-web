<?php
 
function helloName($name='Nameless', $age='unknown') 
{
  var_dump("Hello , $name! You are $age old!");
}

helloName('Kaspar', 33);
helloName('Mats', 69);
helloName('Ants', 18);

function square($a) 
{
  if ($a<0)
  {
    return 0;
  }
  return $a * $a;
}

$answer = square(2);

function recursion($i) {
  if ($i < 10)
  {
    var_dump($i);
    recursion($i+1);
  }
}

recursion(0);
