<?php

namespace Imoveis\Models;

use Illuminate\Database\Eloquent\Model;

class Prop_Detail extends Model
{
    protected $table = 'prop_details';

    public $timestamps = false;
    
    protected $fillable = ['prop_detail'];


}
