<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"]))
{
  return false;
}

function dump(...$values)
{
  echo '<pre>';
  var_dump(...$values); 
  echo '</pre>';
}

#dump($_SERVER);

switch($_SERVER['REQUEST_URI'])
{
case '/':
  include __DIR__ . '/../views/index.php';
  break;
case '/us';
  include __DIR__ .  '/../views/us.php';
  break;
default:
  echo '404';
}
?>
