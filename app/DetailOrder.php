<?php

namespace App;

use App\Order;
use App\Menu;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{

    protected $fillable = ['order_id', 'menu_id', "price", "quantity"];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function menus()
    {
    	return $this->hasOne(Menu::class, 'id', 'menu_id');	
    }
}
