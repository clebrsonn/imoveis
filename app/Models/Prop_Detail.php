<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Prop_Detail extends Model
{
    protected $table = 'prop_details';

    public $timestamps = false;

    protected $fillable = ['prop_detail'];

    public function properties()
    {
        return $this->belongsToMany(Property::class,'property_has_detail', 'detail_id', 'property_id');
    }

}
