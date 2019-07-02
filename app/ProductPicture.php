<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class ProductPicture extends Model
{
    use softDeletes;
    public function product()
    {
    	return $this->belongsTo(Product::class)->withTrashed();
    }
}
