<?php
require_once('controllers/BaseController.php');
require_once('models/post.php');

class PostsController extends BaseController
{
  public function index()
  {
    $posts = Post::all();
    return $this->render('posts.index', ['posts' => $posts]);
  }

  public function create()
  {
    return $this->render('posts.create');
  }

  public function store()
  {
    $result = Post::create($_POST);
    if ($result) {
      return redirect('/posts');
    }
    return redirect('/posts/create');
  }
}
