<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Subcategory extends Model
{
	public $table = "sub_categories";

    	use softDeletes;

    public function category()
    {
    	return $this->belongsTo(Category::class)->withTrashed();
    }
    public function products()
    {
    	return $this->hasMany(Product::class, 'sub_category_id');
    }
     
}
