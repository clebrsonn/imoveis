<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public $timestamps = false;
    protected $fillable = ['city_name'];
    
    public function state(){
        return $this->belongsTo(State::class);
    }
    
    public function adressess(){
        return $this->hasMany(Adress::class);
    }

}
