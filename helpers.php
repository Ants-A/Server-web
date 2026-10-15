<?php

use App\Models\User;

function dump(...$values)
{
  echo '<pre>';
  var_dump(...$values); 
  echo '</pre>';
}

function dd(...$values)
{
  dump(...$values);
  die;
}

function auth(){
  $userID = $_SESSION['userID'] ?? null;
  if($userID) {
      return User::find($userID);
  }
  return false;
}

function redirect($path)
{
  header("Location: $path");
}

function view($viewName, $variables = [])
{
  extract($variables);
  include __DIR__ . "/views/$viewName.php";
}
