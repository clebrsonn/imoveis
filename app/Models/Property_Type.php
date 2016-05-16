<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Property_Type extends Model
{

    protected $table = 'property_types';

    public $timestamps = false;

    protected $fillable = ['property_type'];

    public function properties(){
        return $this->hasMany(Property::class);
    }

}
