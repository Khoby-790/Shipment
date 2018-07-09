<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['invoice','tracking_number','weight','quantity','created_at','updated_at'];
}
