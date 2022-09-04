<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Visitor;
class Company extends Model
{
      protected $table="companies";
      protected $fillable=[
    	'cmp_name', 'cmp_phone', 'cmp_city', 'cmp_email', 'cmp_image',
    ];
    public function visitors()
    {
    	return $this->belongsToMany(Visitor::class,'company_visitor');
    }
     public function services()
    {
    	return $this->belongsToMany(Service::class,'company_services');
    }
}
