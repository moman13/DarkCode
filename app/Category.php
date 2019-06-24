<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [];

  //   public function parent(){
		// 	return $this->hasMany('App\categories','parent_id');
		// }

		// public function children(){
		// 	return $this->belongsTo('App\categories','parent_id');
		// }

		public function products() {return $this->hasMany('App\Product', 'subcategories_id');}


		public function subcategories(){ return $this->hasMany('App\Subcategory', 'categories_id'); }    

	

	}
