<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function rules()
   	{
   		return $this->hasMany(Order_rule::class);
   	}
}
