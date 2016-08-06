<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['departure', 'arrival'];

    public function trips(){
        return $this->$this->belongsToMany('App\Trip');
    }
}
