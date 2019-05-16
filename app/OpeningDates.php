<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpeningDates extends Model
{
    protected $dates = ['start', 'end'];

    public function orders()
    {
    	return $this->hasMany('App\Order', 'opening_id');
    }

    public function rules()
    {
    	return $this->hasManyThrough('App\Order_rule', 'App\Order', 'opening_id');
    }
}
