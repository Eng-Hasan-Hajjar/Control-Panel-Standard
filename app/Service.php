<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Company;

class Service extends Model
{
     protected $table="services";
     protected $fillable=[
    	'ser_name', 'ser_image', 'ser_description', 'ser_price',
    ];
        public function companies()
    {
        return $this->belongsToMany(Company::class,'company_services');
    }
        public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
