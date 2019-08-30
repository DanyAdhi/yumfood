<?php

namespace App;

use App\Vendor;
use App\DetailOrder;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['menu_name', 'price', 'descryption', 'vendor_id'];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function detail_order()
    {
    	return $this->belongsTo(DetailOrder::class);
    }
}
