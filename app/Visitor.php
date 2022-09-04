<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Company;
class Visitor extends Model
{
     protected $table="visitors";
     protected $fillable=[
    	'vis_name', 'vis_last_name', 'vis_phone', 'vis_city', 'vis_address',
    ];

      public function companies()
    {
        return $this->belongsToMany(Company::class,'company_visitor');
    }

}
