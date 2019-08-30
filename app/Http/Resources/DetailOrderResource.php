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
            'menu_id'   => $this->menu_id,
        ];
    }
}
