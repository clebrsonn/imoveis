<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
 
    protected $table = 'addresses';

    public $timestamps = false;
 
    protected $fillable = ['CEP', 'street', 'district'];
    
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function properties(){
        return $this->hasMany(Property::class);
    }

}
