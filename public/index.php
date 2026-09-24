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

spl_autoload_register(function ($class)
{
  $class = substr($class, strlen('App\\'));
  $class = str_replace('\\', '/', $class);
  dump($class);
  require_once __DIR__ . "/../src/$class.php";
});

use App\Controllers\PublicController;
use App\DB;
use App\Router;

$router = new Router();
$db = new DB();
$controller = new PublicController();
dump ($router, $db, $controller);

#dump($_SERVER);
/*
switch($_SERVER['REQUEST_URI'])
{
case '/':
  include __DIR__ . '/../views/index.php';
  break;
case '/us';
  include __DIR__ .  '/../views/us.php';
  break;
case '/technology';
  include __DIR__ .  '/../views/technology.php';
  break;
default:
  echo '405';
}
 */
?>
