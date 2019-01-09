<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
       'staff_name', 'appointment_takenby','date','time'
     ];

     public function user()
     {
       return $this->belongsTo('App\User');
     }

     
}
