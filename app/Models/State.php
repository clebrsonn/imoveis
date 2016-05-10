<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    public $timestamps = false;
    protected $fillable = ['UF', 'state_name'];
    
    public function cities(){
        return $this->hasMany(City::class);
    }

}
