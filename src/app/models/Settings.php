<?php

use Phalcon\Mvc\Model;

class Settings extends Model
{
    public $setting_id;
    public $default_price;
    public $default_stock;
    public $zipcode;
    public $title_optimization;
}
