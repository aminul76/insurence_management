<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cusinfo extends Model
{

    protected $fillable = [
        'admin_id',
        'accountno',
        'name',
        'phone',
        'name',
        'nid',
        'c_address',
        'p_address',
        'photo',
    ];

    public function customer()
    {
        return $this->hasOne('App\Customer');
    }
   
}
