<?php
require_once('controllers/BaseController.php');
require_once('models/post.php');

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }

  public function index()
  {
    echo "DA DEN POSTS CONTROLLER";
    $posts = Post::all();
    $data = array('posts' => $posts);
    $this->render('index', $data);
  }

  public function showPost()
  {
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render('show', $data);
  }

}