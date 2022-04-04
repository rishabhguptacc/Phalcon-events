<?php

use Phalcon\Mvc\Controller;

class DisplayOrdersController extends Controller
{
    public function indexAction()
    {
        $this->view->orders = Orders::find();
    }
}
