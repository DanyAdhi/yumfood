<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'total_order'   => $this->total_order,
            'request'       => $this->request,
            'created_at'    => $this->created_at,
            'detail_order'  => DetailOrderResource::collection($this->detail_order),
        ];
    }
}
