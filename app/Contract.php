<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'energy', 'product', 'mobile', 'duration', 'promo',
    ];

    public function customer()
    {
        return $this->hasOne('App\Customer');
    }
}