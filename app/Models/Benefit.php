<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = 'benefits';

    public $timestamps = false;

    protected $fillable = ['property_type'];

    public function properties(){
        return $this->hasMany(Property::class);
    }


}
