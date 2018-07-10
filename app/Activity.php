<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['shipment_id','Activity', 'tracking_number','Location','purpose_of_activity','date_of_update','time_of_update'];
}
