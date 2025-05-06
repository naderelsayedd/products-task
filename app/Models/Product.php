<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock_quantity'];

    public function getAdjustedPrice()
    {
        $basePrice = $this->price;

        if ($this->stock_quantity < 5) {

            return round($basePrice * 1.15, 2); //if low stock price will be +15%
        } else {

            return round($basePrice * 0.90, 2); //if high stock price will be -10%
        }
    }

}
