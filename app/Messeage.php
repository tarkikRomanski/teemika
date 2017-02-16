<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messeage extends Model
{
    //
    protected $table = 'messeages';

    protected $fillable = ['id', 'name', 'email', 'site', 'text', 'created_at', 'updated_at'];
}
