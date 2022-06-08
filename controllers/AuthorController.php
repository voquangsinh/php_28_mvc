<?php
require_once('controllers/BaseController.php');
require_once('models/author.php');


class AuthorController extends BaseController
{

  public function viewAuthor()
  {
      $lists = Author::all();

      $this->render('author.show', ['lists' => $lists]);
  }

}