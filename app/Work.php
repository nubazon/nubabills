<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    public function user(){
        $this->belongsTo('App\User');
    }
    public function transactions(){
        $this->belongsToMany('App\Transaction');
    }
    public function notifications(){
        $this->morphToMany('App\Notification');
    }
}
