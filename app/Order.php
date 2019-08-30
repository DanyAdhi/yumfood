<?php

namespace App;

use App\DetailOrder;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total_order', 'request'];
    
    public function detail_order()
    {
        return $this->hasMany(DetailOrder::class);
    }
}
