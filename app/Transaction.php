<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function user(){
        $this->belongsTo('App\User');
    }
    public function works(){
        $this->belongsToMany('App\Work');
    }
    public function notifications(){
        $this->morphToMany('App\Notification');
    }
}
