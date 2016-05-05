<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
 
    protected $table = 'addresses';

    public $timestamps = false;
 
    protected $fillable = ['CEP', 'street', 'district'];
    

}
