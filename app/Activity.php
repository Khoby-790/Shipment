<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['shipment_id','Activity','Location','purpose_of_activity','created_at','updated_at'];
}
