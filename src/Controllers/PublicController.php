<?php
namespace App\Controllers;
use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController
{
  public function index() 
  {
    $posts = Post::where('category', 'world');
    view("index", compact('title', 'posts'));
  }

  public function us()
  {
    $title = 'US';
    $posts = Post::where('category', 'us');
    view('us', compact('title', 'posts'));
  }

  public function technology()
  {
    $title = 'Technology';
    $posts = [
      [
        'title' => 'Some Technology title 1',
        'date' => 'January 1, 2021',
        'author' => 'Pets',
        'body' => 'Some U.S content 1',
      ],
      [
        'title' => 'Some Technology title 2',
        'date' => 'January 3, 2021',
        'author' => 'Manivald',
        'body' => 'Some U.S content 2',
      ],
      [
        'title' => 'Some Technology title 3',
        'date' => 'January 5, 2021',
        'author' => 'Jorss',
        'body' => 'Some U.S content 3',
      ],
      [
        'title' => 'Some Technology title 4',
        'date' => 'January 7, 2021',
        'author' => 'Heli Kopter',
        'body' => 'Some U.S content 4',
      ],
    ];
    view("technology", compact('title', 'posts'));
  }

  public function test() {
    $db = new App\DB();
  }

  public function form()
  {
    $title = 'Form';
    view("form", compact('title'));
  }

  public function answer()
  {
    $title = 'Answer';
    dump($_GET, $_POST);
  }
}

?>
