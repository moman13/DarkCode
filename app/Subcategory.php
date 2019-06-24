<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [];

    
		public function category()
		{
		return $this->belongsTo(Category::class);
}

public function products() {

	return $this->hasManyThrough('App\Product','App\Category','subcategories_id','categories_id','id');

}
	
	}