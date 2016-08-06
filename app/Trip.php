<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public function flights(){
        return $this->$this->belongsToMany('App\Flight');
    }
}
