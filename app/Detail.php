<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['name','email', 'ic', 'image','phonenumber', 'officenumber', 'occupation', 'race', 'religion', 'address1', 'address2', 'poscode', 'city','province','note'];
}
