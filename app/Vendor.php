<?php

namespace App;

use App\Tag;
use App\Menu;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';
	protected $fillable = ['name', 'logo'];

	public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
        
    }
}
