<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = 'properties';

    public $timestamps = false;

    protected $fillable = ['number_bedrooms', 'number_suites', 'area_util',
        'spaces_garage', 'value', 'number_wc', 'iptu_year',
        'cond_month', 'access', 'property_description'
    ];

    public function details()
    {
//        $this->belongsToMany('','table','fk','otherKey','relacao');
        return $this->belongsToMany(Prop_Detail::class, 'property_has_detail', 'property_id', 'detail_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(Property_Type::class);
    }
}
