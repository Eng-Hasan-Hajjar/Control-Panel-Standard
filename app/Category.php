<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Category extends Model
{
     protected $table="categories";
     protected $fillable=[
    	'cat_name', 'category_id',
    ];
      public function services()
    {
        return $this->hasMany(Service::class);
    }
    
}
