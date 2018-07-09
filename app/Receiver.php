<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $fillable = ['receiver_first_name','receiver_other_name','receiver_last_name','receiver_address','receiver_phone','nearest_airport','created_at','updated_at'];
}
