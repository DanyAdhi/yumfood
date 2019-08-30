<?php
namespace App;
use App\Taggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   	public function vendors()
    {
        return $this->morphedByMany('App\Vendor', 'taggable');
    }
}