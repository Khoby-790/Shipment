<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = ['item_id','receiver_id','sender_id','status','shipment_mode','departure_time','arrival_time','pick_up_date','delivery_date','comment'];
}
