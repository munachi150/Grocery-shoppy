<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Category extends Model
{
    use softDeletes;
    public function subcategories()
    {
    	return $this->hasMany(Subcategory::class);
    }
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
