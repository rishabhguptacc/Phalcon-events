<?php
namespace App\Listeners;

use Phalcon\Events\Event;

class defaultProviders
{
    public function updateToDefaults(Event $event, $values, $settings)
    {
        if ($settings[0]->title_optimization == "with_tag") {
            $values->product_name = $values->product_name.$values->tags;
        }

        if ($values->price == '') {
            $values->price = $settings[0]->default_price;
        }

        if ($values->stock == '') {
            $values->stock = $settings[0]->default_stock;
        }
    }


// cmnt
}
