<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = ['id', 'name', 'email', 'site', 'type', 'price', 'language', 'core', 'message', 'created_at', 'updated_at'];
}
