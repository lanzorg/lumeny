<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'street', 'number', 'zip',
    ];

    public function constracts()
    {
        return $this->hasMany('App\Contract');
    }
}
