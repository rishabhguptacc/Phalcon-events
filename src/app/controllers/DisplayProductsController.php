<?php

use Phalcon\Mvc\Controller;

class DisplayProductsController extends Controller
{
    public function indexAction()
    {
        $this->view->products = Products::find();
    }
}
