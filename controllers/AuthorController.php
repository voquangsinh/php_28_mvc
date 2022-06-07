<?php
require_once('controllers/BaseController.php');
require_once('models/author.php');


class AuthorController extends BaseController
{

  public function viewAuthor()
  {
      
      $author = new Author();
      $lists = $author->all();

      $this->render('author.show', ['lists' => $lists]);
  }

}