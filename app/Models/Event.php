<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{

    public function Workshops()
    {
        return $this->hasMany('App\Models\Workshop');
    }
    public function Workshops_futureevents()
    {
        return $this->hasMany('App\Models\Workshop')->whereDate('start','>=', Carbon::now());
    }

}
