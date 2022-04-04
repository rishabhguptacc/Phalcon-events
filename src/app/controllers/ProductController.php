<?php

use Phalcon\Mvc\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        //return '<h1>Hello!!!</h1>';
    }

    public function addProductAction()
    {
        $product = new Products;

        $product->assign(
            $this->request->getpost(),
            [
                'product_name',
                'description',
                'tags',
                'price',
                'stock'
            ]
        );

        // Store and check for errors
        $success = $product->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>"
                     . implode('<br>', $product->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }

    public function displayProductsAction()
    {
        $this->view->products = Products::find();
    }
}
