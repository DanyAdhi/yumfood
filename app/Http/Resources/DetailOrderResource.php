<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetailOrderResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'price'     => $this->price,
            'quantity'  => $this->quantity,
            'menu'   	=> $this->menus->menu_name,
        ];
    }
}
