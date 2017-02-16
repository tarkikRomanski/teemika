<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //

    protected $table = 'plans';

    protected  $fillable = ['title', 'price', 'id', 'text', 'display', 'created_at', 'updated_at'];
}
