<?php
require_once 'controllers/BaseController.php';

class HomeController extends BaseController {

    public function index()
    {
        $this->render('pages.home');
    }
}