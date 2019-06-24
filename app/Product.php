<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories() {  

     return $this->belongsTo('App\Category');
 }

public function subcategories() {

	return $this->belongsTo('App\Subcategory');

}

}
