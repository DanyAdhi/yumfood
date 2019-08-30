<?php
namespace App;
use App\Vendor;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{
    protected $table = 'taggables';
    
    public function vendor()
    {
        return $this->belongsToMany(Vendor::class, 'id', 'taggable_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'id', 'tag_id');
    }
}