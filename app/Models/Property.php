<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = 'properties';
    
    public $timestamps = false;

    protected $fillable = ['number_bedrooms', 'number_suites', 'area_util', 
                            'spaces_garage', 'value', 'number_wc', 'iptu_year'
                            'cond_month', 'access', 'property_description'
    ];
    
    public function details(){
        return $this->belongsToMany(Prop_Detail::class);
    }

}
