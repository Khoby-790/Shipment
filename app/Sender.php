<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $fillable = ['first_name','other_name','last_name','sender_address','sender_phone','created_at','updated_at'];
}
