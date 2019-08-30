<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id'            => $this->id,
        'menu_name'     => $this->menu_name,
        'price'         => $this->price,
        'description'   => $this->descryption,
        'vendor'        => 
            [
                'id'            => $this->vendor->id,
                'vendor'        => $this->vendor->name,
                'logo'          => $this->vendor->logo,
            ],
      ];
    }
}
