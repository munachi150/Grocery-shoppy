<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use softDeletes;
    public function pictures(){

    	return $this->hasMany(ProductPicture::class);
    }
    public function category()
    {
    	return $this->belongsTo(Category::class)->withTrashed();
    }
    public function subcategory()
    {
    	return $this->belongsTo(Subcategory::class, 'sub_category_id')->withTrashed();
    }
}
