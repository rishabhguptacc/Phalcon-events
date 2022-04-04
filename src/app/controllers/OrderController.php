<?php

use Phalcon\Mvc\Controller;

class OrderController extends Controller
{
    public function indexAction()
    {
        //return '<h1>Hello!!!</h1>';
        $this->view->productList = Products::find();
    }


    public function addOrderAction()
    {
        $order = new Orders;

        $order->assign(
            $this->request->getpost(),
            [
                'customer_name',
                'customer_address',
                'zipcode',
                'product',
                'quantity'
            ]
        );

        // Store and check for errors
        $success = $order->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>"
                     . implode('<br>', $order->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }

    public function displayOrdersAction()
    {
        $this->view->orders = Orders::find();
    }
}
